@extends('layouts.dashboard.app')
@section('title')BDO Designer | Выбор поста авторизации@endsection
@section('styles')@section('content')
<div class="container">
  <div class="row my-3">
    <div class="col">
      <div class="card rounded shadow-lg">
        <div class="card-header bg-custom text-white">
          <h2>Авторизация на посту</h2>
        </div>
        <div class="card-body">
          @include('partials.dashboards.guardpost.authenter')
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
