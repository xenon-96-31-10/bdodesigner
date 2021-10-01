@extends('layouts.sign.app')
@section('title')BDO Designer | Восстановление пароля@endsection

@section('content')
<div class="container">
  <div class="row vh-100 justify-content-center">
      <div class="col-md-6 my-auto">
        <h1 class="h3 mb-3 font-weight-normal text-center">Восстановление пароля</h1>
          <div class="card border-0 shadow-lg">
              <div class="card-header bg-custom p-1 d-flex justify-content-between">
                <a class="navbar-brand m-0 p-0" href="{{route('mainpage')}}">
                  <div class="bg-white p-0">
                    <p class="m-0 mb-1 p-0 brandtext ">BDO</p>
                    <p class=" m-0 mb-1 p-0 brandtext">DESIGNER</p>
                  </div>
                  <p class=" m-0 p-0 brandslogan">BEAUTY IS IN THE DETAILS</p>
                </a>
                <span class="my-auto"><a href="{{route('mainpage')}}"><i class="fas fa-home fa-2x"></i></a></span>
              </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

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

                        <div class="form-group row mb-0">
                            <div class="col offset-md-2">
                                <button type="submit" class="btn btn-black">
                                    {{ __('Отправить ссылку для восстановления пароля') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
