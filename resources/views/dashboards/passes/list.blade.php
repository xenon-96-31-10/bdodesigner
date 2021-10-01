@extends('layouts.dashboard.app')
@section('title')BDO Designer | Список пропусков@endsection
@section('styles')@section('content')
<div class="row my-3">
  <div class="col-12">
    @foreach($entrances as $entrance)

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
                    @role('guard-post')
                   <a class="dropdown-item" href="{{ route('guardpost.pass', ['id' => $entrance->id]) }}">Открыть</a>
                   @else
                   <a class="dropdown-item" href="{{ route('admin.pass', ['id' => $entrance->id]) }}">Открыть</a>
                   @endrole

                  @if($entrance->type == 'one-time')
                    @if($entrance->pass->entry->format('d.m.Y') >= Carbon\Carbon::now()->format('d.m.Y'))
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
    @endforeach
  </div>

  <div class="col-12 d-flex justify-content-center">
      {{ $entrances->links() }}
  </div>
</div>
@endsection
