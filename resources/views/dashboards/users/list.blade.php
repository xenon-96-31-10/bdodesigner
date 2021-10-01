@extends('layouts.dashboard.app')
@section('title')BDO Designer | Администратор - список пользователей@endsection

@section('content')
<div class="row my-3">
  <div class="col-12 mb-2">
    <h1>Список пользователей:</h1>
    <div class="table-responsive border rounded shadow-lg">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ФИО</th>
            <th scope="col">E-mail</th>
            <th scope="col">Телефон</th>
            <th scope="col">Роль</th>
            <th scope="col">Действия</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
              <tr>
                <th scope="row">{{$user->id}}</th>
                <td>
                  @if(isset($user->bio))
                  {{ $user->bio->surname }} {{ $user->bio->name }} {{ $user->bio->lastname }}
                  @else
                  Пользователь еще не заполнил данные
                  @endif
                </td>
                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                <td><a href="tel:+7{{ $user->phone }}">+7{{ $user->phone }}</a></td>
                <td><span class="font-weight-bold">{{$user->roles()->first()->name}}</span></td>
                <td><i class="fas fa-trash-alt mr-2"></i> <i class="fas fa-edit mr-2"></i> <i class="fas fa-book-reader mr-2"></i></td>
              </tr>

          @endforeach

        </tbody>
      </table>
    </div>
  </div>
  <div class="col-12 d-flex justify-content-center">
      {{ $users->links() }}
  </div>

</div>

@endsection
