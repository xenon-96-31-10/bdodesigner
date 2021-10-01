@extends('layouts.app')

@section('title')BDO Disigner - Добро пожаловать | Белый список партнеров@endsection
@section('styles')
<style media="screen">
.header{
 background-image: url('storage/images/white-list-header.jpg');
 background-attachment: fixed;
 background-size: contain;
 background-position: center;
}
</style>
@endsection
@section('content')
<div class="container-fluid header">
  <div class="row min-vh-100 min-vh-sm-100">
    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-sm-3 bg-custom align-self-end">
      <h1 class="header-title">Белый список</h1>
      <p class="header-p">Наши партнеры, которые проверены годами успешного сотрудничества и зарекомендовавшие качеством своей работы</p>
    </div>
    <div class="d-none d-sm-block col-12 mb-5 align-self-end text-center header-button header-button-bg" onclick="slowScroll('white-list')">
      <h4>Список партнеров</h4>
      <span >
        <i class="fas fa-chevron-down fa-4x"></i>
      </span>
    </div>
    </div>
  </div>
</div>
<div class="container mt-3" id='white-list'>
  <ol class="breadcrumb-custom">
        <li class="breadcrumb-item">
          <a href="{{route('home')}}">Главная</a>
        </li>
        <li class="breadcrumb-item">
          <a href="#">Партнеры</a>
        </li>
        <li class="breadcrumb-item active">Белый список</li>
  </ol>
  <div class="row breadcrumb my-5">
    <div class="col-12">
      <h1>Белый список</h1>
      <h4 class="text-muted">Список зарекомендовавших себя партнеров</h4>
      <br>
      <p align="justify">
        Наша компания больше всего дорожит именем и репутацией, поэтому мы всегда выполняем свою работу качественно.
        Это же касается и наших партнеров, поэтому мы рекомендуем ознакомиться с белым списком людей и компаний, на которых можно положиться
        и доверить работу.
      </p>
      <blockquote class="blockquote text-right">
        <h3 class="mb-0"><q>И топорная работа может быть ювелирной, если плотник — мастер своего дела.</q></h3>
        <footer class="blockquote-footer">Борис Юзефович Крутиер <cite title="Source Title">(род. 1940) — русский писатель-афорист.</cite></footer>
      </blockquote>
    </div>
  </div>
</div>
<div class="container mt-3">
  <div class="row breadcrumb shadow mb-5">
    <div class="col-12 col-sm-5">
      <img src="storage/images/partners/greshnov.jpg" class="img-fluid rounded float-left" alt="Грешнов Николай">
      <br>
      <h2>Грешнов Николай</h2>
      <h5 class="text-muted">Сантехнические работы, Москва и МО.</h5>
      <h6><i class="fas fa-check-circle"></i> Проверенный специалист</h6>
      <a class="text-muted" href="http://greshnov.net/"><i class="fas fa-globe"></i> greshnov.net</a>
    </div>
    <div class="col-12 col-sm-7 text-center mt-2">
      <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5-kCUi4FWs0" allowfullscreen></iframe>
      </div>
      <p>
        Любые и только качественные сантехнические работы от Николая Грешнова.
      </p>
    </div>
  </div>
  <div class="row breadcrumb shadow mb-5">
    <div class="col-12 col-sm-5">
      <img src="storage/images/partners/logo-ekovata-msk.png" class="img-fluid rounded float-left" alt="ЭКОВАТА-МСК">
      <br>
      <h2>Компания "ЭКОВАТА-МСК"</h2>
      <h5 class="text-muted">Утепление, строительство и реконструкция домов</h5>
      <h6><i class="fas fa-check-circle"></i> Проверенные специалисты</h6>
      <a class="text-muted" href="https://ekovata-msk.ru/"><i class="fas fa-globe"></i> ekovata-msk.ru</a>
    </div>
    <div class="col-12 col-sm-7 text-center mt-2">
      <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item"src="https://www.youtube.com/embed/Jbz3XErqxJM" allowfullscreen></iframe>
      </div>
      <p>
        Шумоизоляция стен квартиры. Шумоизоляция квартиры эковатой.
      </p>
    </div>
  </div>
</div>

@endsection

@section('scripts')@endsection
