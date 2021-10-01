<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;
use App\Models\User;
use App\Models\TransitoryUser;
use App\Models\TransitoryCar;
use App\Models\TransitoryMechanizm;

class SearchCarController extends Controller
{
    public function ApiCar(Request $request){
      if($request->type == "car"){
        $car = Car::find($request->id);
        if(isset($car->user->bio)){
          $fio = $car->user->bio->surname;
          $fio .= " ";
          $fio .= $car->user->bio->name;
          $fio .= " ";
          $fio .= $car->user->bio->lastname;
        }else{
          $fio = "Владелец еще не указал свои данные";
        }
        $data = [
          'model' => $car->model,
          'body' => $car->body,
          'color' => $car->color,
          'fio' => $fio,
        ];
        return $data;
      }elseif($request->type == "t"){
        $car = TransitoryCar::find($request->id);
        if(isset($car->user)){
          $fio = $car->user->surname;
          $fio .= " ";
          $fio .= $car->user->name;
          $fio .= " ";
          $fio .= $car->user->lastname;
        }else{
          $fio = "Не установлен";
        }
        $data = [
          'model' => $car->model,
          'body' => $car->body,
          'color' => $car->color,
          'fio' => $fio,
        ];
        return $data;
      }
    }

    public function ApiMechanizm(Request $request){
      $mechanizm = TransitoryMechanizm::find($request->id);

      $data = [
        'model' => $mechanizm->model,
        'name' => $mechanizm->name,
        'color' => $mechanizm->color,
        'price' => $mechanizm->tax->price,
      ];
      return $data;
    }

    public function ApiHuman(Request $request){
      if($request->type == "const"){
        $user = User::find($request->id);

        if($user->avatar != null){
          $avatar = $user->avatar->path;
        }else{
          $avatar = "Нет";
        }
        if($user->documents->first() != null){
          $documents = $user->documents;
        }else{
          $documents = "Нет";
        }

        $data = [
          'avatar' => $avatar,
          'documents' => $documents,
        ];

        return $data;
    }
  }
}
