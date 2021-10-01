<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entrance;
use App\Models\LogOfEntrance;
use App\Models\PassesComent;
use App\Models\OneTimePass;
use App\Models\PermanentPass;
use App\Models\DateOfPermanentPass;
use App\Models\Project;
use App\Models\Car;
use App\Models\TransitoryCar;
use App\Models\User;
use App\Models\TransitoryUser;
use App\Models\Avatar;
use App\Models\Document;
use App\Models\TransitoryAvatar;
use App\Models\TransitoryDocument;
use App\Models\TransitoryMechanizm;
use App\Models\Mechanizm;
use App\Models\Tax;

use Storage;
use Carbon\Carbon;

class PassController extends Controller
{

  public function showPasses(){
    //$entrances = Entrance::latest()->get();
    $entrances = Entrance::orderBy('id', 'desc')->paginate(5)->fragment('entrances');
    return view('dashboards.passes.list', compact('entrances'));
  }

  /**
   * method showPassesCreate for show form to create Pass
   * @return view Dashboard panel
   */
  public function showCreateForm(){
    return view('dashboards.passes.create');
  }

  public function showPass($id){
    $entrance = Entrance::findorFail($id);

    return view('dashboards.passes.pass', compact('entrance'));
  }

  public function addComent(Request $request){
    $entrance = Entrance::findorFail($request->id);
    $author = auth()->user();

    $coment = new PassesComent();
    $coment->text = $request->comment;
    $coment->author()->associate($author);
    $coment->entrance()->associate($entrance)->save();

    return redirect()->back()->with('status', 'Комментарий добавлен');
  }

  public function checkIn(Request $request){
    $entrance = Entrance::findorFail($request->id);
    $pass = $entrance->pass;
    if($entrance->type == 'one-time'){
      $pass->entry = Carbon::now();
      $pass->save();
    }else{
      $date = new DateOfPermanentPass();
      $date->entry = Carbon::now();
      $date->pass()->associate($pass)->save();
    }

    $author = auth()->user();
    $log = new LogOfEntrance();
    $log->type = 'Прибыл';
    $log->user()->associate($author);
    $log->entrance()->associate($entrance)->save();

    return redirect()->back()->with('status', 'Приезд отмечен');
  }

  public function checkOut(Request $request){
    $entrance = Entrance::findorFail($request->id);
    $pass = $entrance->pass;
    if($entrance->type == 'one-time'){
      $pass->exit = Carbon::now();
      $pass->save();
    }else{
      $date = $pass->dates()->latest()->first();
      $date->exit = Carbon::now();
      $date->save();
    }

    $author = auth()->user();
    $log = new LogOfEntrance();
    $log->type = 'Отбыл';
    $log->user()->associate($author);
    $log->entrance()->associate($entrance)->save();

    return redirect()->back()->with('status', 'Отъезд отмечен');
  }

  public function create(Request $request){
    //dd($request->all());
    $author = auth()->user();
    $project = Project::find(1);

    $entrance = new Entrance();
    $entrance->type = $request->passtype;
    if($request->passtype == 'one-time'){
      $pass = $this->createOneTime($request->all());
    }elseif($request->passtype == 'permanent'){
      $pass = $this->createPermanent($request->all());
    }

    $entrance->author()->associate($author);
    $entrance->pass()->associate($pass);
    $entrance->project()->associate($project)->save();


    if(isset($request->comment)){
      $coment = new PassesComent();
      $coment->text = $request->comment;
      $coment->author()->associate($author);
      $coment->entrance()->associate($entrance)->save();
    }

    $log = new LogOfEntrance();
    $log->type = 'Новый пропуск';
    $log->user()->associate($author);
    $log->entrance()->associate($entrance)->save();
    if($author->hasRole('admin')){
      return redirect()->route('admin.passes')->with('status', 'Новый пропуск создан!');
    }else{
      return redirect()->route('guardpost.passes')->with('status', 'Новый пропуск создан!');
    }
  }

  private function createOneTime($data){
    $pass = new OneTimePass();
    $pass->entry = $data["date_entry"];
    $pass->type = $data["visitortype"];
    if($data["visitortype"] == "pass-car"){
      $visitor = $this->createCar($data);
    }elseif($data["visitortype"] == "pass-human"){
      $visitor = $this->createHuman($data);
    }elseif($data["visitortype"] == "pass-mechanizm"){
      $visitor = $this->createMechanizm($data);
    }

    $pass->visitor()->associate($visitor)->save();

    return $pass;
  }

  private function createPermanent($data){
    $pass = new PermanentPass();
    $timetable = "";
    foreach ($data["timetable"] as $item) {
      $timetable .= " ";
      $timetable .= $item;
    }
    $pass->timetable = $timetable;
    $pass->type = $data["visitortype"];
    if($data["visitortype"] == "pass-car"){
      $visitor = $this->createCar($data);
    }elseif($data["visitortype"] == "pass-human"){
      $visitor = $this->createHuman($data);
    }elseif($data["visitortype"] == "pass-mechanizm"){
      $visitor = $this->createMechanizm($data);
    }
    $pass->visitor()->associate($visitor)->save();

    return $pass;
  }

  private function createCar($data){
    $str = explode("-", $data['numberofcar']);
    $type = $str[0];
    $id = $str[1];

    if($type == "car"){
      $car = Car::find($id);
      return $car;
    }elseif($type == "t"){
      $t_car = TransitoryCar::find($id);
      return $t_car;
    }elseif($type == "new"){
      if($data['driver'] == 'need'){
        $str_h = explode("-", $data['fio']);
        $type_h = $str_h[0];
        $id_h = $str_h[1];
        $user = $this->createHuman($data);
        if($type_h == "const"){
          $new_car = new Car();
        }else{
          $new_car = new TransitoryCar();
        }
        $new_car->user()->associate($user);
      }else{
        $new_car = new TransitoryCar();
      }
      $new_car->number = $id;
      if($data['passtype'] == 'one-time'){
        $new_car->model = 'Не указано';
        $new_car->type = 'Временное';
        $new_car->body = 'Легковое';
        $new_car->color = 'Не указано';
      }elseif($data['passtype'] == 'permanent'){
        $new_car->model = $data["modelofcar"];
        $new_car->type = 'Постоянное';
        $new_car->body = $data["bodyofcar"];
        $new_car->color = $data["color"];
      }
      $new_car->save();
      return $new_car;
    }

  }

  private function createHuman($data){
    $str = explode("-", $data['fio']);
    $type = $str[0];
    $id = $str[1];
    if($type == "const"){
      $user = User::find($id);
      $type_user = "";
      $avatar = new Avatar();
      $doc = new Document();
    }elseif($type == "t"){
      $user = TransitoryUser::find($id);
      $type_user = "transitory/";
      $avatar = new TransitoryAvatar();
      $doc = new TransitoryDocument();
    }elseif($type == "new"){
      $fio = explode(" ", $id);

      $user = new TransitoryUser();
      $user->surname = $fio[0];
      $user->name = $fio[1];
      if(isset($fio[2])){
        $user->lastname = $fio[2];
      }else{
        $user->lastname = "";
      }
      $user->save();
      $type_user = "transitory/";
      $avatar = new TransitoryAvatar();
      $doc = new TransitoryDocument();
    }

    if((isset($data["avatar"]))&&($data["avatar"] != null)){
      Storage::makeDirectory('public/'.$type_user.'users/'.$user->id.'/');
      $file = $data["avatar"];
      $filename = "avatar.";
      $filename .= $file->getClientOriginalExtension();
      $path = Storage::putFileAs('public/'.$type_user.'users/'.$user->id.'/avatar' , $file, $filename);
      $avatar->path = $path;
      $avatar->user()->associate($user)->save();
    }

    if((isset($data["passport"]))&&($data["passport"] != null)){
      Storage::makeDirectory('public/'.$type_user.'users/'.$user->id.'/');
      $file = $data["passport"];
      $filename = "passport.";
      $filename .= $file->getClientOriginalExtension();
      $path = Storage::putFileAs('public/'.$type_user.'users/'.$user->id.'/passport' , $file, $filename);
      $doc->name = "Паспорт";
      $doc->path = $path;
      $doc->user()->associate($user)->save();
    }

    return $user;
  }

  private function createMechanizm($data){
    $str = explode("-", $data['passesmechanizm']);
    $type = $str[0];
    $id = $str[1];

    if($type == "t"){
      $t_mechanizm = TransitoryMechanizm::find($id);
      return $t_mechanizm;
    }else{
      if($data['driver'] == 'need'){
        $str_h = explode("-", $data['fio']);
        $type_h = $str_h[0];
        $id_h = $str_h[1];
        $user = $this->createHuman($data);
        if($type_h == "const"){
          $new_mechanizm = new Mechanizm();
        }else{
          $new_mechanizm = new TransitoryMechanizm();
        }
        $new_mechanizm->user()->associate($user);
      }else{
        $new_mechanizm = new TransitoryMechanizm();
      }
      $new_mechanizm->model = $data['modelofmechanizm'];
      $new_mechanizm->number = $data['numberofmechanizm'];
      $tax = Tax::find($data['bodyofmechanizm']);
      if($tax->type == "Спецтехника"){
        $new_mechanizm->name = $data['namemechanizm'];
      }else{
        $new_mechanizm->name = $tax->type;
      }
      $new_mechanizm->color = $data['colormechanizm'];
      $new_mechanizm->tax()->associate($tax)->save();
      return $new_mechanizm;
    }
  }
}
