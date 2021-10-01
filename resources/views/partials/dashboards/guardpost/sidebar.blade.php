<ul class="list-unstyled components">
    <p>
      <span class="h4">{{ $bio->name}} {{ $bio->lastname}}</span>
      <br>
      <span><i class="fas fa-user-tie mr-2"></i>{{ $role}}</span>
    </p>
    @if(auth()->user()->get_guard_status() != null && auth()->user()->get_guard_status()->status == 'Авторизован')
    <!-- <li class="@if(Route::is('guardpost')) active @endif">
        <a href="{{ route('guardpost')}}"><i class="fas fa-tachometer-alt mr-2"></i>Главная панель</a>
    </li> -->
    <li class="@if(Route::is('guardpost.passes.create') or Route::is('guardpost.passes')) active @endif">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-ticket-alt mr-2"></i>Пропуска</a>
        <ul class="collapse @if(Route::is('guardpost.passes.create') or Route::is('guardpost.passes')) show @endif list-unstyled" id="homeSubmenu">
            <li class="@if(Route::is('guardpost.passes')) active @endif">
                <a href="{{ route('guardpost.passes')}}"><i class="fas fa-clipboard-list mr-2"></i>Все пропуска</a>
            </li>
            <li class="@if(Route::is('guardpost.passes.create')) active @endif">
                <a href="{{ route('guardpost.passes.create')}}" ><i class="fas fa-clipboard-check mr-2"></i>Заказать</a>
            </li>
        </ul>
    </li>
    @endif

</ul>
