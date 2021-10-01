<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\SecurityPost;
use App\Models\EnterOfSecurityPost;
use App\Models\LogOfSecurityPost;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * method redirectTo for redirect after auth
     * @return route
     */
    public function redirectTo()
    {
        $role = auth()->user()->roles()->first();
        $for = [
            'admin' => 'admin',
            'owner'  => 'owner',
            'guard-post'  => 'guardpost.chooseenter',
        ];
        return $this->redirectTo = route($for[$role->slug]);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ],
        [
            'email.required' => 'Поле E-mail должно быть заполнено',
            'email.string' => 'Поле E-mail должно быть строчного типа',
            'password.required' => 'Поле Пароль должно быть заполнено',
            'password.string' => 'Поле Пароль должно быть строчного типа',
        ]);
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $user = auth()->user();

        if($user->hasRole('guard-post')){
          $post = $user->get_security_post();
          $enter = $user->get_guard_status()->enter_of_security_post_id;
          $log = new LogOfSecurityPost();
          $log->status = 'Вышел';
          $log->security_post()->associate($post);
          $log->securitie()->associate($user);
          $log->enter()->associate($enter)->save();
        }
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }


        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }
}
