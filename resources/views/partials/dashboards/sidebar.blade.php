<nav id="sidebar">
  <div class="sticky-top" >
    <div class="sidebar-header p-1">
      <a class="navbar-brand m-0 p-0" href="{{route('mainpage')}}">
        <div class="bg-white p-0">
          <p class="m-0 mb-1 p-0 brandtext ">BDO</p>
          <p class=" m-0 mb-1 p-0 brandtext">DESIGNER</p>
        </div>
        <p class=" m-0 p-0 brandslogan">BEAUTY IS IN THE DETAILS</p>
      </a>
    </div>

    @role('admin')
     @include('partials.dashboards.admin.sidebar')
    @endrole
    @role('owner')
     @include('partials.dashboards.owner.sidebar')
    @endrole
    @role('guard-post')
     @include('partials.dashboards.guardpost.sidebar')
    @endrole

    <ul class="CTAs">
      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Выход') }}
            <i class="fas fa-sign-out-alt ml-2"></i>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>
    </ul>
  </div>

</nav>
