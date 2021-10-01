<nav class="navbar navbar-expand-lg navbar-light bg-light border rounded shadow-lg my-2">
  <button type="button" id="sidebarCollapse" class="btn btn-black" data-toggle="tooltip" data-placement="right" title="Приборная панель">
      <i class="fas fa-align-left"></i>
  </button>
  <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-align-justify"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav ml-auto">
          <li class="nav-item active">
              <a class="nav-link" href="{{ route('mainpage')}}"><i class="fas fa-globe mr-2"></i>Вернуться на сайт</a>
          </li>
      </ul>
  </div>
</nav>
