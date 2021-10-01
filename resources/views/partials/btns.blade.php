<div class="container">
  <div class="row my-5">
    @if(Request::is('oprosnik'))
    <!-- <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 mb-sm-0 text-center">
      <a type="button" href="#" class="btn btn-dark-custom">Отправить</a>
    </div> -->
    <div class="col-12 text-right">
      <a type="button" href="{{route('portfolio')}}" class="btn btn-outline-custom">Начать знакомство с самого начала</a>
    </div>
    @else
    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 mb-sm-0 text-right">
      <a type="button" href="{{route('oprosnik')}}" class="btn btn-dark-custom">Все нравится, начнем процесс строительства дома</a>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center">
      <a type="button" href="{{route('portfolio')}}" class="btn btn-outline-custom">Начать знакомство с самого начала</a>
    </div>
    @endif
  </div>
</div>
