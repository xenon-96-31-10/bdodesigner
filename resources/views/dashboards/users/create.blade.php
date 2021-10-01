@extends('layouts.dashboard.app')
@section('title')BDO Designer | Регистрация нового пользователя@endsection
@section('styles')@section('content')
<div class="row my-3">
  <div class="col">
    <div class="card rounded shadow-lg">
      <div class="card-header bg-custom text-white">
        <h2>Регистрация нового пользователя</h2>
      </div>
      <div class="card-body">
        @include('partials.dashboards.users.createform')
      </div>
    </div>
  </div>
</div>
@endsection
