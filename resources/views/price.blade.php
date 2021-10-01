@extends('layouts.app')

@section('title')BDO Disigner - Добро пожаловать@endsection

@section('styles')
<style media="screen">

.header-button{
  cursor: pointer;
color: #3b3b3b;
}
.header-button:hover{
  color: gray;
}
</style>
@endsection
@section('content')
<div class="container">
  <div class="row min-vh-100 text-center">
    <div class="col-12 text-left align-self-end">
      <h1 class="title">Цены на дизайн интерьера</h1>
    </div>
    <div class="col-lg-4 align-self-end">
      <img class="rounded-circle" src="storage/images/paket1.png" alt="Generic placeholder image" width="200" height="200">
      <h4 class="my-2"><strong>ПЛАНИРОВОЧНОЕ РЕШЕНИЕ</strong></h2>
      <h5>2000 рублей за  м<sup>2</sup></h6>
    </div>
    <div class="col-lg-4 align-self-end">
      <img class="rounded-circle " src="storage/images/paket2.png" alt="Generic placeholder image" width="200" height="200">
      <h4 class="my-2"><strong>АВТОРСКИЙ НАДЗОР</strong></h2>
      <h5>10000 рублей за  м<sup>2</sup></h6>
    </div>
    <div class="col-lg-4 align-self-end">
      <img class="rounded-circle" src="storage/images/paket3.png" alt="Generic placeholder image" width="200" height="200">
      <h4 class="my-2"><strong>УПРАВЛЕНИЕ СТРОЙКОЙ</strong></h2>
      <h5>13000 рублей за  м<sup>2</sup></h6>
    </div>
    <div class="d-none d-sm-block col-12 mb-5 align-self-end text-center header-button" onclick="slowScroll('pakets')">
      <h4>Пакетные предложения</h4>
      <span>
        <i class="fas fa-chevron-down fa-3x"></i>
      </span>
    </div>
  </div>
</div>

<!-- <h1 class="title my-5">Цены на дизайн интерьера</h1>
<div class="row align-self-center">
  <div class="col-lg-4">
    <img class="rounded-circle" src="images/paket1.png" alt="Generic placeholder image" width="200" height="200">
    <h4 class="my-2"><strong>ПЛАНИРОВОЧНОЕ РЕШЕНИЕ</strong></h2>
    <h5>2000 рублей за  м<sup>2</sup></h6>
  </div>
  <div class="col-lg-4">
    <img class="rounded-circle " src="images/paket2.png" alt="Generic placeholder image" width="200" height="200">
    <h4 class="my-2"><strong>АВТОРСКИЙ НАДЗОР</strong></h2>
    <h5>10000 рублей за  м<sup>2</sup></h6>
  </div>
  <div class="col-lg-4">
    <img class="rounded-circle" src="images/paket3.png" alt="Generic placeholder image" width="200" height="200">
    <h4 class="my-2"><strong>УПРАВЛЕНИЕ СТРОЙКОЙ</strong></h2>
    <h5>13000 рублей за  м<sup>2</sup></h6>
  </div>
</div>
<div class="row text-center align-self-end">
  <div class="col-12 mt-2 align-self-end text-center">
    <span class="header-button" onclick="slowScroll('pakets')">
      <i class="fas fa-chevron-down fa-3x"></i>
    </span>
  </div>
</div> -->
<div class="container">
  <ol class="breadcrumb-custom my-2">
        <li class="breadcrumb-item">
          <a href="{{route('home')}}">Главная</a>
        </li>
        <li class="breadcrumb-item active">Цены</li>
  </ol>
</div>
<div class="container my-2" id='pakets'>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="title">Пакетные предложения</h1>
    <p class="lead">Наши предложения самые выгодные по всем параметрам на рынке</p>
  </div>
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 box-shadow" data-aos="flip-left">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Дизайн + Техническая карта </h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">13500 руб.<small class="text-muted">/ м<sup>2</sup></small></h1>
        <ul class="list-unstyled mt-5 mb-4">
          <li data-toggle="tooltip" data-placement="top" title="На основании онлайн ответов на вопросы Мы пытаемся осознать Ваши желания и потребности"><h4><strong>Опросный портрет задачи</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Сколько угодно решений пока мы не придем к тому что Вам действительно понравилось"><h4><strong>Планировочное решение</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Предварительный подбор стиля, Цветов, Материалов, Вариантов мебели и декора, Световых решений, Решений по сантехники и Мебели"><h4><strong>Дизайн-концепция</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="С пониманием бюджета, а также того что было переделано в процессе всех согласований"><h4><strong>Подбор материалов</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Точная расстановка мебели на визуализации"><h4><strong>Расстановка мебели</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Виртуальный тур по будущему проекту"><h4><strong>3Д Визуализации</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Чертежи без учета конструктивных решений и проекта зданий и сооружений включая благоустройство"><h4><strong>Строительные чертежи</strong></h4></li>
        </ul>
        <button type="button" class="btn btn-block btn-custom btn-lg" data-toggle="modal" data-target="#ModalForm">Заказать</button>
      </div>
    </div>
    <div class="card mb-4 box-shadow" data-aos="flip-up">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Дизайн + Техническая карта + Авторский надзор</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">23500 руб.<small class="text-muted">/ м<sup>2</sup></small></h1>
        <ul class="list-unstyled mt-5 mb-4">
          <li data-toggle="tooltip" data-placement="top" title="На основании онлайн ответов на вопросы Мы пытаемся осознать Ваши желания и потребности"><h4><strong>Опросный портрет задачи</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Сколько угодно решений пока мы не придем к тому что Вам действительно понравилось"><h4><strong>Планировочное решение</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Предварительный подбор стиля, Цветов, Материалов, Вариантов мебели и декора, Световых решений, Решений по сантехники и Мебели"><h4><strong>Дизайн-концепция</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="С пониманием бюджета, а также того что было переделано в процессе всех согласований"><h4><strong>Подбор материалов</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Точная расстановка мебели на визуализации"><h4><strong>Расстановка мебели</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Виртуальный тур по будущему проекту"><h4><strong>3Д Визуализации</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Чертежи без учета конструктивных решений и проекта зданий и сооружений включая благоустройство"><h4><strong>Строительные чертежи</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Постоянный контроль над происходящим на объекте"><h4><strong>Авторский надзор</strong></h4></li>
        </ul>
        <button type="button" class="btn btn-block btn-custom btn-lg" data-toggle="modal" data-target="#ModalForm">Закажите</button>
      </div>
    </div>
    <div class="card mb-4 box-shadow" data-aos="flip-right">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Дизайн + Техническая карта + Авторский надзор + Управление стройкой (под ключ)</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">33500 руб.<small class="text-muted">/ м<sup>2</sup></small></h1>
        <ul class="list-unstyled mt-5 mb-4">
          <li data-toggle="tooltip" data-placement="top" title="На основании онлайн ответов на вопросы Мы пытаемся осознать Ваши желания и потребности"><h4><strong>Опросный портрет задачи</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Сколько угодно решений пока мы не придем к тому что Вам действительно понравилось"><h4><strong>Планировочное решение</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Предварительный подбор стиля, Цветов, Материалов, Вариантов мебели и декора, Световых решений, Решений по сантехники и Мебели"><h4><strong>Дизайн-концепция</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="С пониманием бюджета, а также того что было переделано в процессе всех согласований"><h4><strong>Подбор материалов</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Точная расстановка мебели на визуализации"><h4><strong>Расстановка мебели</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Виртуальный тур по будущему проекту"><h4><strong>3Д Визуализации</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Чертежи без учета конструктивных решений и проекта зданий и сооружений включая благоустройство"><h4><strong>Строительные чертежи</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Постоянный контроль над происходящим на объекте"><h4><strong>Авторский надзор</strong></h4></li>
          <li data-toggle="tooltip" data-placement="top" title="Под ключ"><h4><strong>Управление стройкой</strong></h4></li>
        </ul>
        <button type="button" class="btn btn-block btn-custom btn-lg" data-toggle="modal" data-target="#ModalForm">Закажите</button>
      </div>
    </div>
  </div>
</div>
<!-- <div class="container">
  <div class="row featurette align-items-center">
    <div class="col-md-7" data-aos="zoom-out">
      <h2 class="featurette-heading">Первое преимущество. <span class="text-muted">Это наша скорость.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5" data-aos="zoom-out">
      <img class="featurette-image img-fluid mx-auto"src="images/4.jpg" data-holder-rendered="true">
    </div>
  </div>
  <div class="row featurette align-items-center">
    <div class="col-md-5 order-2 order-sm-1" data-aos="zoom-out">
      <img class="featurette-image img-fluid mx-auto" src="images/2.jpg" data-holder-rendered="true">
    </div>
    <div class="col-md-7 order-1 order-sm-2" data-aos="zoom-out">
      <h2 class="featurette-heading">Второе преимущество. <span class="text-muted">Это наша находчивость.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
  </div>
</div> -->

@endsection
@section('scripts')
<script>
AOS.init({
// Global settings:
disable: 'mobile', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
initClassName: 'aos-init', // class applied after initialization
animatedClassName: 'aos-animate', // class applied on animation
useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
disableMutationObserver: false, // disables automatic mutations' detections (advanced)
debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


// Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
offset: 120, // offset (in px) from the original trigger point
delay: 0, // values from 0 to 3000, with step 50ms
duration: 400, // values from 0 to 3000, with step 50ms
easing: 'ease', // default easing for AOS animations
once: false, // whether animation should happen only once - while scrolling down
mirror: false, // whether elements should animate out while scrolling past them
anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
</script>
@endsection
