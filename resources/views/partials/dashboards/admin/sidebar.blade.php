<ul class="list-unstyled components">
    <p>
      <span class="h4">{{ $bio->name}} {{ $bio->lastname}}</span>
      <br>
      <span><i class="fas fa-user-tie mr-2"></i>{{ $role}}</span>
    </p>
    <li class="@if(Route::is('admin')) active @endif">
        <a href="{{ route('admin')}}"><i class="fas fa-tachometer-alt mr-2"></i>Главная панель</a>
    </li>
    <!-- <li class="active">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a href="#">Home 1</a>
            </li>
            <li>
                <a href="#">Home 2</a>
            </li>
            <li>
                <a href="#">Home 3</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#">About</a>
    </li> -->
    <li class="@if(Route::is('admin.users.create') or Route::is('admin.users')) active @endif">
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-users mr-2"></i>Пользователи</a>
        <ul class="collapse @if(Route::is('admin.users.create') or Route::is('admin.users')) show @endif list-unstyled" id="pageSubmenu">
            <li class="@if(Route::is('admin.users')) active @endif">
                <a href="{{ route('admin.users')}}"><i class="fas fa-list-ol  mr-2"></i>Список</a>
            </li>
            <li class="@if(Route::is('admin.users.create')) active @endif">
                <a href="{{ route('admin.users.create')}}"><i class="fas fa-user-plus mr-2"></i>Добавить</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-people-carry mr-2"></i>Сотрудники</a>
            </li>
            <!-- <li>
                <a href="#"><i class="fas fa-user-minus mr-2"></i>Удалить</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-user-edit mr-2"></i>Изменить</a>
            </li> -->
        </ul>
    </li>
    <li>
        <a href="#"><i class="fas fa-building mr-2"></i>Объекты</a>
    </li>
    <li class="@if(Route::is('admin.passes.create') or Route::is('admin.passes')) active @endif">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-ticket-alt mr-2"></i>Пропуска</a>
        <ul class="collapse @if(Route::is('admin.passes.create') or Route::is('admin.passes')) show @endif list-unstyled" id="homeSubmenu">
            <li class="@if(Route::is('admin.passes')) active @endif">
                <a href="{{ route('admin.passes')}}"><i class="fas fa-clipboard-list mr-2"></i>Все пропуска</a>
            </li>
            <li class="@if(Route::is('admin.passes.create')) active @endif">
                <a href="{{ route('admin.passes.create')}}" ><i class="fas fa-clipboard-check mr-2"></i>Заказать</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#"><i class="fas fa-project-diagram mr-2"></i>Портфолио</a>
    </li>
    <li>
        <a href="#"><i class="fas fa-tasks mr-2"></i>Опросы</a>
    </li>
    <li>
        <a href="#"><i class="fas fa-headset mr-2"></i>Заявки</a>
    </li>
    <li>
        <a href="#"><i class="fas fa-user-cog mr-2"></i>Профиль</a>
    </li>
    <!-- <li>
        <a href="#">Portfolio</a>
    </li>
    <li>
        <a href="#">Contact</a>
    </li> -->
</ul>
