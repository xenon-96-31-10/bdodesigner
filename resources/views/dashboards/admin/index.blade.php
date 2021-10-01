@extends('layouts.dashboard.app')
@section('title')BDO Designer | Администратор@endsection

@section('content')
<div class="row my-3">
  <div class="col-12 col-sm-3 mb-2">
    <div class="card border rounded shadow-lg">
      <h2 class="card-header bg-info text-white"><i class="fas fa-tasks mr-2"></i>Опросы </h2>
      <div class="card-body">
        <h5 class="card-title">Новых на сайте: <span class="badge badge-info text-white">9</span></h5>
        <a href="#" class="btn btn-block btn-lg btn-info text-white">Подробнее</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-3 mb-2">
    <div class="card border rounded shadow-lg">
      <h2 class="card-header bg-primary text-white"><i class="fas fa-headset mr-2"></i>Заявки</h2>
      <div class="card-body">
        <h5 class="card-title">Новых на сайте: <span class="badge badge-primary text-white">9</span></h5>
        <a href="#" class="btn btn-block btn-lg btn-primary text-white">Подробнее</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-3 mb-2">
    <div class="card border rounded shadow-lg">
      <h2 class="card-header bg-success text-white"><i class="fas fa-building mr-2"></i>Объекты</h2>
      <div class="card-body">
        <h5 class="card-title">Новых на сайте: <span class="badge badge-success text-white">9</span></h5>
        <a href="#" class="btn btn-block btn-lg btn-success text-white">Подробнее</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-3 mb-2">
    <div class="card border rounded shadow-lg">
      <h2 class="card-header bg-dark text-white"><i class="fas fa-users mr-2"></i>Клиенты</h2>
      <div class="card-body">
        <h5 class="card-title">Новых на сайте: <span class="badge badge-dark text-white">9</span></h5>
        <a href="#" class="btn btn-block btn-lg btn-dark text-white">Подробнее</a>
      </div>
    </div>
  </div>
</div>
@endsection
