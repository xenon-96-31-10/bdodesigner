<nav class="navbar navbar-expand-lg navbar-dark bg-custom py-0" style="color:white">
  <button class="navbar-toggler m-0 p-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" id="hamburger"></span>
  </button>
  <a class="navbar-brand m-0 p-0" href="{{route('mainpage')}}">
    <div class="bg-white p-0">
      <p class="m-0 mb-1 p-0 brandtext ">BDO</p>
      <p class=" m-0 mb-1 p-0 brandtext">DESIGNER</p>
    </div>
    <p class=" m-0 p-0 brandslogan">BEAUTY IS IN THE DETAILS</p>
  </a>
  <div class="collapse navbar-collapse justify-content-center m-0 p-0" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('mainpage')}}">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropright">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Этапы
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('oprosnik')}}">Онлайн-опросник</a>
          <a class="dropdown-item" href="#">Дизайн и Проектирование</a>
          <a class="dropdown-item dropdown-toggle" id="navbarDropdownDrop" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Строительство</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownDrop">
            <a class="dropdown-item" href="#">Разрешительная документация</a>
            <a class="dropdown-item" href="#">Устройство фундамента</a>
            <a class="dropdown-item" href="#">Устройство строения и перекрытий</a>
            <a class="dropdown-item" href="#">Работы по устройству кровли</a>
            <a class="dropdown-item" href="#">Работы по фасаду и ливневым отводам</a>
            <a class="dropdown-item" href="#">Инженерия</a>
            <a class="dropdown-item" href="#">Черновые работы</a>
            <a class="dropdown-item" href="#">Чистовые работы</a>
          </div>
          <a class="dropdown-item" href="{{route('stage-mebel')}}">Мебель и наполнение</a>
          <a class="dropdown-item" href="#">Благоустройство</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('portfolio')}}">Портфолио</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('process')}}">Процесс</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('price')}}">Цены</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Партнеры
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('white-list')}}">Белый список</a>
          <a class="dropdown-item" href="#">Черный список</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Контакты</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Клиентам
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('login')}}">Войти в личный кабинет <i class="fas fa-sign-in-alt"></i></a>
        </div>
      </li>
    </ul>
  </div>
  <div class="justify-content-end m-0 p-0">
    <div class="d-block d-sm-none">
      <a class="phone" href="tel:+74994042123">
        <i class="fas fa-phone-square"></i>
      </a>
    </div>
    <div class="d-none d-sm-block">
      <a class="phonenum" href="tel:+74994042123">
        +7(499)<span>404-21-23</span>
      </a>
    </div>
  </div>
</nav>
