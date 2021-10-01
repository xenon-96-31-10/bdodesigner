@extends('layouts.app')

@section('title')BDO Disigner - Добро пожаловать|Портфолио@endsection

@section('styles')@endsection
@section('content')
<div class="container-fluid">
  <ol class="breadcrumb my-2">
        <li class="breadcrumb-item">
          <a href="{{route('home')}}">Главная</a>
        </li>
        <li class="breadcrumb-item active">Портфолио</li>
  </ol>
  <div class="row align-items-center my-2">
    <div class="col-12 col-sm-3">
      <h1 class="display-4">Портфолио</h1>
    </div>
    <div class="col-12 col-sm-9 text-right">
      <div class="tags-scroller" id="filter">
        <a href="#" class="text-muted tags mr-2 active" data-tag="всё">#всё</a>
        <a href="#" class="text-muted tags mr-2" data-tag="minimal">#minimal</a>
        <a href="#" class="text-muted tags mr-2" data-tag="реализовано">#реализовано</a>
        <a href="#" class="text-muted tags mr-2" data-tag="loft">#loft</a>
        <a href="#" class="text-muted tags mr-2" data-tag="дерево">#дерево</a>
      </div>
    </div>
  </div>
  <div class="row" id="stage"></div>
</div>
@endsection
