@extends('layouts.app')

@section('title')BDO Designer | Добро пожаловать@endsection

@section('content')
<div class="container-fluid">

  <div class="row align-items-center my-2">
    <div class="col-12 text-right">
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

@section('scripts')
<script src="{{ asset('js/leader-line.min.js') }}"></script>
<script>
</script>
@endsection
