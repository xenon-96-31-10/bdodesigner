<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\SecurityPost;
use App\Models\EnterOfSecurityPost;
use App\Models\LogOfSecurityPost;

use Illuminate\Http\Request;

class GuardPostController extends Controller
{
    public function showChooseEnterForm(){
        return view('dashboards.guardpost.auth');
    }

    public function authEnter(Request $request){
      $user = auth()->user();
      $post = $user->get_security_post();
      $enter = $post->enters()->where('id', $request->enter)->first();
      $log = new LogOfSecurityPost();
      $log->status = 'Авторизован';
      $log->security_post()->associate($post);
      $log->securitie()->associate($user);
      $log->enter()->associate($enter)->save();

      return redirect()->route('guardpost.passes')->with('status', 'Вы авторизованы');
    }
}
