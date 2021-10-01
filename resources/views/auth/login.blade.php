@extends('layouts.sign.app')
@section('title')BDO Designer | Вход в ЛК@endsection
@section('styles')
<style media="screen">
body{
 background-image: url('storage/images/fon-login.jpg');
 background-attachment: fixed;
 background-size: cover;
 background-position: center;
}
.px-01{
  padding-right: 0 !important;
  padding-left: 0.03rem !important;
}
.top{
  top: -10%;
}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row vh-100 justify-content-center">
        <div class="col-md-6 my-auto">
            <div class="card border-0 shadow-lg">
               <div class="card-body">
                   <form method="POST" action="{{ route('login') }}" class="form-signin">
                       @csrf
                       <h3 class="h3 my-2 font-weight-normal text-center">Вход в личный кабинет</h3>
                       <div class="form-group row">
                           <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                           <div class="col-md-6">
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                               @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                       </div>

                       <div class="form-group row">
                           <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

                           <div class="col-md-6">
                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                               @error('password')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                       </div>

                       <div class="form-group row">
                           <div class="col-md-6 offset-md-4">
                               <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                   <label class="form-check-label" for="remember">
                                       {{ __('Запомнить меня') }}
                                   </label>
                               </div>
                           </div>
                       </div>

                       <div class="form-group row mb-0">
                           <div class="col-md-8 offset-md-2 text-right">
                               <button type="submit" class="btn btn-block btn-black">
                                   {{ __('Войти') }}
                               </button>

                               @if (Route::has('password.request'))
                                   <a class="btn btn-link text-dark mr-0" href="{{ route('password.request') }}">
                                       {{ __('Забыли пароль?') }}
                                   </a>
                               @endif
                           </div>
                       </div>
                   </form>
               </div>

               <div class="card-footer bg-custom pt-0 pb-1 px-01 d-flex border-0">
                 <a class="navbar-brand m-0 p-0 top" href="{{route('mainpage')}}">
                   <div class="bg-white p-0">
                     <p class="m-0 mb-1 p-0 brandtext ">BDO</p>
                     <p class=" m-0 mb-1 p-0 brandtext">DESIGNER</p>
                   </div>
                   <p class=" m-0 p-0 brandslogan">BEAUTY IS IN THE DETAILS</p>
                 </a>
               </div>

            </div>
        </div>
    </div>
</div>
@endsection
