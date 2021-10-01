<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;
use App\Models\Bio;
use App\Models\Car;
use App\Models\Organization;
use App\Models\Project;
use App\Models\TypeOfProject;
use App\Models\Status;
use App\Models\Activiti;
use App\Models\Equipment;
use App\Notifications\NewUser;
use Storage;


class UsersController extends Controller
{

  /**
   * method showUsers for show List if Users
   * @return view List if Users
   */
  public function showUsersList(){
    $users = User::paginate(10)->fragment('users');
    return view('dashboards.users.list', compact('users'));
  }

  /**
   * method showUsersCreate for show form to create User
   * @return view Dashboard panel
   */
  public function showCreateForm(){
    return view('dashboards.users.create');
  }

    /**
     * method CreateUser for create user
     * @return view
     */
    public function create(Request $request){
      $this->validator($request->all())->validate();
      $pass = random_int(100000, 999999);

      $this->usercreate($request->all(), $pass);


      $response = "Новый пользователь создан!";
      return redirect()->route('admin.users')->with('status', 'Новый пользователь создан!');
    }

      /**
       * Get info and create a new User
       * @param  array  Request $request, pass
       * @return create  new User
       */
      private function usercreate($data, $pass){
        $newrole = Role::where('name', $data['role'])->first();
        $user1 = new User();
        $user1->phone = $data['phone'];
        $user1->email = $data['email'];
        $user1->password = bcrypt($pass);
        $user1->save();
        $user1->notify(new NewUser($pass));
        $user1->roles()->attach($newrole);

        if($data['name'] != null){$this->bio($data, $user1);}
        if($data['modelofcar'] != null){$this->car($data, $user1);}
        if(($data['role'] != 'Собственник')&&($data['role'] != 'Представитель собственника')&&($data['role'] != 'Член семьи')&&($data['role'] != 'Охранник территории/дома')){
          $this->organization($data, $user1);
          if($data['role'] == 'Работник'){
            $this->worker($data, $user1);
          }
        }else{
          if($data['role'] == 'Собственник'){
            $this->newproject($data, $user1);
          }else{
            $this->linktoproject($data, $user1);
          }
        }
      }

      /**
       * Get info and attach bio for user
       * @param  array  Request $request
       */
      private function bio($data, $user1){
        $bio1 = new Bio();
        $bio1->name = $data['name'];
        $bio1->lastname = $data['lastname'];
        $bio1->surname = $data['surname'];
        $bio1->sex = $data['sex'];
        $bio1->dateofbirth = $data['dateofbirth'];
        $bio1->user()->associate($user1)->save();
      }

      /**
       * Private method to create Car and linked with user
       * @param  array $data
       * @param  array $user1
       */
      private function car($data, $user1){
        $car = new Car();
        $car->model = $data['modelofcar'];
        $car->number = $data['numberofcar'];
        $car->type = $data['typeofcar'];
        $car->body = $data['bodyofcar'];
        $car->color = $data['color'];
        $car->user()->associate($user1)->save();
        for($i = 2; $i < 11; $i++){
          if(isset($data['modelofcar'.$i.''])){
            $car = new Car();
            $car->model = $data['modelofcar'.$i.''];
            $car->number = $data['numberofcar'.$i.''];
            $car->type = $data['typeofcar'.$i.''];
            $car->body = $data['bodyofcar'.$i.''];
            $car->color = $data['color'.$i.''];
            $car->user()->associate($user1)->save();
          }
        }
      }

      /**
      * Private method to create organization or/and there link with user
      * @param  array $data
      * @param  array $user1
       */
      private function organization($data, $user1){
        if(Organization::where('name', $data['organization'])->count() > 0){
          $org = Organization::where('name', $data['organization'])->first();
        }else{
          $org = new Organization();
          $org->name = $data['organization'];
          $org->save();
        }
        $user1->organization()->attach($org);
      }

      /**
       * This method to create new Project and link them to new user as owner
       * @param  array $data
       * @param  array $user1
       */
      private function newproject($data, $user1){
        $project = new Project();
        $type = TypeOfProject::where('slug', $data['typeofproject'])->first();
        $status = Status::find(1);
        $project->name = $data['nameofnewproject'];
        if($data['description'] != null){
          $project->description = $data['description'];
        }else{
          $project->description = 'Без описания';
        }
        $project->region = $data['region'];
        $project->city = $data['city'];
        $project->street = $data['street'];
        $project->numberofhouse = $data['numberofhouse'];
        $project->numberofroom = $data['numberofroom'];
        $project->totalarea = $data['totalarea'];
        $project->livingarea = $data['livingarea'];
        $project->status()->associate($status);
        $project->typeofproject()->associate($type)->save();
        $user1->projects()->attach($project);
      }

      /**
       * linktoproject's method need to attach user in exists project
       * @param  array $data
       * @param  array $user1
       */
      private function linktoproject($data, $user1){
        $project = Project::where('name', $data['projectname'])->first();
        $user1->projects()->attach($project);
      }

      /**
       * method worker to add typeofjob and some equipment for new User
       * @param  array $data
       * @param  array $user1
       */
      private function worker($data, $user1){
        if(isset($data['typeofjob'])){
          foreach ($data['typeofjob'] as $job) {
            if(Activiti::where('name', $job)->count() > 0){
              $activiti = Activiti::where('name', $job)->first();
            }else{
              $activiti = new Activiti();
              $activiti->name = $job;
              $activiti->save();
            }
            $user1->activities()->attach($activiti);
          }
        }
        if(isset($data['equipment'])){
          foreach ($data['equipment'] as $equipment) {
            $equipment = Equipment::where('name', $equipment)->first();
            $user1->equipments()->attach($equipment);
            $equipment->value = $equipment->value-1;
            $equipment->save();
          }
        }
      }


      /**
       * Get a validator for an incoming registration request.
       *
       * @param  array  $data
       * @return \Illuminate\Contracts\Validation\Validator
       */
      protected function validator(array $data)
      {
          return Validator::make($data, [
              'phone' => ['required', 'string', 'size:10', 'unique:users,phone'],
              'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email']
          ],
          [
              'phone.required' => 'Поле Телефон должно быть заполнено',
              'phone.string' => 'Поле Телефон должно быть строчного типа',
              'phone.unique' => 'Пользователь с таким телефоном уже есть',
              'phone.size' => 'Введите 10 цифр',
              'email.required' => 'Поле Email должно быть заполнено',
              'email.string' => 'Поле Email должно быть строчного типа',
              'email.unique' => 'Пользователь с таким email уже есть',
          ],);

      }
}
