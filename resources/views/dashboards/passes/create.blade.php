@extends('layouts.dashboard.app')
@section('title')BDO Designer | Оформление нового пропуска@endsection
@section('styles')@section('content')
<div class="row my-3">
  <div class="col">
    <div class="card rounded shadow-lg">
      <div class="card-header bg-custom text-white">
        <h2>Оформление нового пропуска</h2>
      </div>
      <div class="card-body">
        @include('partials.dashboards.passes.createform')
      </div>
    </div>
  </div>
</div>
@endsection
