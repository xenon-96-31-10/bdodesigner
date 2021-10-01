@extends('layouts.dashboard.app')
@section('title')BDO Designer | Окно пропуска@endsection

@section('content')
<div class="row my-3">
  <div class="col-12">
    <div class="card bg-light border rounded shadow-lg my-3">
      <div class="card-header bg-light">
        <div class="row">
          <div class="col-12 col-sm-6 text-sm-left">
            @if($entrance->pass->type == 'pass-car')
              <p class="lead m-2"><i class="fas fa-car mr-2"></i>{{$entrance->pass->visitor->model}} {{$entrance->pass->visitor->number}}</p>
            @elseif($entrance->pass->type == 'pass-human')
              <p class="lead m-2"><i class="fas fa-user mr-2"></i>
                @if($entrance->pass->visitor_type == 'App\Models\User')
                  {{$entrance->pass->visitor->bio->surname}} {{$entrance->pass->visitor->bio->name}} {{$entrance->pass->visitor->bio->lastname}}
                @elseif($entrance->pass->visitor_type == 'App\Models\TransitoryUser')
                  {{$entrance->pass->visitor->surname}} {{$entrance->pass->visitor->name}} {{$entrance->pass->visitor->lastname}}
                @endif
              </p>
            @elseif($entrance->pass->visitor_type == 'App\Models\TransitoryMechanizm')
              <p class="lead m-2"><i class="fas fa-truck mr-2"></i>{{$entrance->pass->visitor->name}} {{$entrance->pass->visitor->number}}</p>
            @endif
          </div>
          <div class="col-12 col-sm-6 d-flex justify-content-between justify-content-sm-end">
            <div class="d-inline mr-0 mr-sm-2">
              <button type="button" class="btn btn-outline-primary rounded-pill">@if($entrance->type == 'one-time')Разовый @else Постоянный @endif</button>
            </div>
            <div class="d-inline btn-group dropleft  mr-0 mr-sm-2">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Действия
              </button>
              <div class="dropdown-menu">
                @if(Route::is('admin.pass') or Route::is('guardpost.pass'))
                  <a class="dropdown-item" href="@role('guard-post'){{ route('guardpost.passes') }} @else {{ route('admin.passes') }} @endrole">К списку</a>
                @endif
                @if($entrance->type == 'one-time')
                  @if($entrance->pass->entry->format('d.m.Y') == Carbon\Carbon::now()->format('d.m.Y'))
                    <a class="dropdown-item" href="@role('guard-post') {{ route('guardpost.passes.checkin') }} @else {{ route('admin.passes.checkin') }} @endrole" onclick="event.preventDefault(); document.getElementById('checkin-form{{$entrance->id}}').submit();">Отметить приезд</a>
                    <form id="checkin-form{{$entrance->id}}" action="@role('guard-post') {{ route('guardpost.passes.checkin') }} @else {{ route('admin.passes.checkin') }} @endrole" method="POST" class="d-none">
                        @csrf
                        <input type="hidden" name="id" value="{{$entrance->id}}">
                    </form>
                    <a class="dropdown-item" href="@role('guard-post') {{ route('guardpost.passes.checkout') }} @else {{ route('admin.passes.checkout') }} @endrole" onclick="event.preventDefault(); document.getElementById('checkout-form{{$entrance->id}}').submit();">Отметить отъезд</a>
                    <form id="checkout-form{{$entrance->id}}" action="@role('guard-post') {{ route('guardpost.passes.checkout') }} @else {{ route('admin.passes.checkout') }} @endrole" method="POST" class="d-none">
                        @csrf
                        <input type="hidden" name="id" value="{{$entrance->id}}">
                    </form>
                  @elseif($entrance->pass->entry->format('d.m.Y') <= Carbon\Carbon::now()->format('d.m.Y'))
                    <a class="dropdown-item" href="@role('guard-post') {{ route('guardpost.passes.checkout') }} @else {{ route('admin.passes.checkout') }} @endrole" onclick="event.preventDefault(); document.getElementById('checkout-form{{$entrance->id}}').submit();">Отметить отъезд</a>
                    <form id="checkout-form{{$entrance->id}}" action="@role('guard-post') {{ route('guardpost.passes.checkout') }} @else {{ route('admin.passes.checkout') }} @endrole" method="POST" class="d-none">
                        @csrf
                        <input type="hidden" name="id" value="{{$entrance->id}}">
                    </form>
                  @endif
                @else
                  @if($entrance->pass->dates->first() == null)
                    <a class="dropdown-item" href="@role('guard-post') {{ route('guardpost.passes.checkin') }} @else {{ route('admin.passes.checkin') }} @endrole" onclick="event.preventDefault(); document.getElementById('checkin-form{{$entrance->id}}').submit();">Отметить приезд</a>
                  @else
                    @if($entrance->pass->dates()->latest()->first()->exit != null)
                      <a class="dropdown-item" href="@role('guard-post') {{ route('guardpost.passes.checkin') }} @else {{ route('admin.passes.checkin') }} @endrole" onclick="event.preventDefault(); document.getElementById('checkin-form{{$entrance->id}}').submit();">Отметить приезд</a>
                    @else
                      <a class="dropdown-item" href="@role('guard-post') {{ route('guardpost.passes.checkout') }} @else {{ route('admin.passes.checkout') }} @endrole" onclick="event.preventDefault(); document.getElementById('checkout-form{{$entrance->id}}').submit();">Отметить отъезд</a>
                    @endif
                  @endif
                  <form id="checkin-form{{$entrance->id}}" action="@role('guard-post') {{ route('guardpost.passes.checkin') }} @else {{ route('admin.passes.checkin') }} @endrole" method="POST" class="d-none">
                      @csrf
                      <input type="hidden" name="id" value="{{$entrance->id}}">
                  </form>
                  <form id="checkout-form{{$entrance->id}}" action="@role('guard-post') {{ route('guardpost.passes.checkout') }} @else {{ route('admin.passes.checkout') }} @endrole" method="POST" class="d-none">
                      @csrf
                      <input type="hidden" name="id" value="{{$entrance->id}}">
                  </form>
                @endif
              </div>
            </div>
            <div class="d-inline">
              <label class="custom-btn-show" data-toggle="tooltip" data-placement="left" title="Подробнее" onclick="showMore('more-{{$entrance->id}}')">
                  <i class="fas fa-plus" id="more-{{$entrance->id}}plus"></i>
              </label>
            </div>
          </div>
        </div>

      </div>
      <div class="card-body">
        <div id="more-{{$entrance->id}}" style="display:none;">
          @if($entrance->pass->type == 'pass-human')
            <div class="row">
              @if($entrance->pass->visitor->avatar != null)
                <div class="col-12 col-sm-3">
                  <img src="{{ Storage::url($entrance->pass->visitor->avatar->path)}}" alt="Аватар" class="img-fluid rounded">
                </div>
              @endif
              @if($entrance->pass->visitor->passport() != null)
                <div class="col-12 col-sm-3">
                  <img src="{{ Storage::url($entrance->pass->visitor->passport()->path)}}" alt="Скан паспорта" class="img-fluid rounded">
                </div>
              @endif
              <div class="col">
                @if($entrance->pass->visitor_type == 'App\Models\User')
                  <ul>
                    <li>Пол: {{$entrance->pass->visitor->bio->sex }}</li>
                    <li>Дата рождения: {{$entrance->pass->visitor->bio->dateofbirth->format('d.m.Y') }}</li>
                    <li>Телефон: <a href="tel:+7{{$entrance->pass->visitor->phone }}">+7{{$entrance->pass->visitor->phone }}</a></li>
                    <li>Почта: <a href="mailto:{{$entrance->pass->visitor->email}}">{{$entrance->pass->visitor->email }}</a></li>
                  </ul>
                @elseif($entrance->pass->visitor_type == 'App\Models\TransitoryUser')
                <p class='lead'>Временный пользователь</p>
                @endif
              </div>
            </div>
          @elseif($entrance->pass->type == 'pass-car')
            <div class="row">
              <div class="col">
                <ul>
                  <li>Тип: {{$entrance->pass->visitor->body}}</li>
                  <li>Цвет: {{$entrance->pass->visitor->color}} </li>
                  @if(isset($entrance->pass->visitor->user))
                    <li>Владелец:
                      @if($entrance->pass->visitor_type == 'App\Models\Car')
                        @if(isset($entrance->pass->visitor->user->bio))
                          {{$entrance->pass->visitor->user->bio->surname}} {{$entrance->pass->visitor->user->bio->name}} {{$entrance->pass->visitor->user->bio->lastname}}
                        @else
                          Не указал свои персональные данные
                        @endif
                      @elseif($entrance->pass->visitor_type == 'App\Models\TransitoryCar')
                        @if(isset($entrance->pass->visitor->user))
                          {{$entrance->pass->visitor->user->surname}} {{$entrance->pass->visitor->user->name}} {{$entrance->pass->visitor->user->lastname}}
                        @endif
                      @endif
                    </li>
                  @endif
                </ul>
              </div>
            </div>
            <div class="row">
              @if(isset($entrance->pass->visitor->user))
                @if($entrance->pass->visitor->user->avatar != null)
                  <div class="col-12 col-sm-3">
                    <img src="{{ Storage::url($entrance->pass->visitor->user->avatar->path)}}" alt="Аватар" class="img-fluid rounded">
                  </div>
                @endif
                @if($entrance->pass->visitor->user->passport() != null)
                  <div class="col-12 col-sm-3">
                    <img src="{{ Storage::url($entrance->pass->visitor->user->passport()->path)}}" alt="Скан паспорта" class="img-fluid rounded">
                  </div>
                @endif
                <div class="col">
                  @if(class_basename($entrance->pass->visitor->user) == 'User')
                    <ul>
                      <li>Пол: {{$entrance->pass->visitor->user->bio->sex }}</li>
                      <li>Дата рождения: {{$entrance->pass->visitor->user->bio->dateofbirth->format('d.m.Y') }}</li>
                      <li>Телефон: <a href="tel:+7{{$entrance->pass->visitor->user->phone }}">+7{{$entrance->pass->visitor->user->phone }}</a></li>
                      <li>Почта: <a href="mailto:{{$entrance->pass->visitor->user->email}}">{{$entrance->pass->visitor->user->email }}</a></li>
                    </ul>
                  @elseif(class_basename($entrance->pass->visitor->user) == 'TransitoryUser')
                  <p class='lead'>Временный пользователь</p>
                  @endif
                </div>
              @endif
            </div>
          @else
            <div class="row">
              <div class="col">
                <ul>
                  <li>Марка: {{$entrance->pass->visitor->model}}</li>
                  <li>Тип: {{$entrance->pass->visitor->tax->type}}</li>
                  <li>Вес: {{$entrance->pass->visitor->tax->weight}}</li>
                  <li>Цвет: {{$entrance->pass->visitor->color}} </li>
                  @if($entrance->type == 'one-time')
                    <li>Стоимость въезда: {{$entrance->pass->visitor->tax->price}} &#8381;</li>
                  @endif
                </ul>
              </div>
            </div>
          @endif
        </div>
        <div class="d-flex justify-content-between">
          <p class="lead"> @if($entrance->type == 'one-time') Дата приезда: {{$entrance->pass->entry->format('d.m.Y') }} @else График: {{$entrance->pass->timetable}} @endif</p>
          @if($entrance->type == 'one-time')<p class="lead"> Дата отъезда: @if($entrance->pass->exit != null){{$entrance->pass->exit->format('d.m.Y') }}@else @endif</p> @endif
        </div>
      </div>
      <div class="card-footer bg-light">
        <div class="row">
          <div class="col-6 text-sm-left">
            <p class="small text-muted mb-0">Дата создания: {{ $entrance->created_at->format('d.m.Y') }}</p>
            <p class="small text-muted">Автор: {{ $entrance->author->bio->name }} {{ $entrance->author->bio->lastname }}</p>
          </div>
          <div class="col-6 text-sm-right">
            <button type="button" class="btn btn-success rounded-pill">{{$entrance->log()->latest()->first()->type}}</button>
          </div>
        </div>
      </div>
    </div>

    <div class="accordion" id="accordionAction">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-lg btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Комментарии
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionAction">
          <div class="card-body">
            @foreach($entrance->coments as $coment)
              <div class="alert alert-info" role="alert">
                <p>{{$coment->text}}</p>
                <hr>
                <p class="small text-muted mb-0">Автор: {{ $coment->author->bio->name }} {{ $coment->author->bio->lastname }}</p>
              </div>
            @endforeach
            <hr>
            <form method="post" action="@role('guard-post') {{ route('guardpost.pass.addcoment') }} @else {{ route('admin.pass.addcoment') }} @endrole" class="needs-validation">
              @csrf
              <input type="hidden" name="id" value="{{$entrance->id}}">
              <div class="form-group my-2">
                <textarea class="form-control" name="comment" id="comment" placeholder="Оставьте свой комментарий" rows="2" required></textarea>
              </div>
              <div class="form-group">
                <button type="submit" name="button" class="btn btn-block btn-info text-white">Оставить коментарий</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-lg btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              История пропуска
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionAction">
          <div class="card-body">
            @foreach($entrance->log as $log)
              <div class="alert alert-info" role="alert">
                <p>{{$log->type}}</p>
                <hr>
                <p class="small text-muted mb-0">Дата: {{ $log->created_at }}</p>
                <p class="small text-muted mb-0">Автор: {{ $log->user->bio->name }} {{ $log->user->bio->lastname }}</p>
              </div>
            @endforeach
          </div>
        </div>
      </div>
      @if($entrance->type == 'permanent')
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-lg btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Даты приезда и отъезда
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionAction">
            <div class="card-body">
              @foreach($entrance->pass->dates as $date)
                <div class="alert alert-info" role="alert">
                  <p>Дата приезда: {{$date->entry->format('d.m.Y')}}</p>
                  @if($date->exit!= null)
                    <p>Дата отъезда: {{$date->exit->format('d.m.Y')}}</p>
                  @else
                    <p>Посетитель еще на объекте</p>
                  @endif
                </div>
              @endforeach
            </div>
          </div>
        </div>
      @endif
    </div>

  </div>
</div>
@endsection
