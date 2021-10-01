<form method="post" action="@role('guard-post') {{ route('guardpost.passes.create') }} @else {{ route('admin.passes.create') }} @endrole" class="needs-validation" id="createPassForm" enctype="multipart/form-data">
  @csrf
  <div class="row my-3">
    <div class="col">
      <button type="button" name="button" class="btn btn-lg btn-block btn-black-outline" id="one-time" onclick="typeofpass('one-time')"><i class="fas fa-stopwatch mr-2"></i><br class="d-block d-sm-none">Разовый</button>
    </div>
    <div class="col">
      <button type="button" name="button" class="btn btn-lg btn-block btn-black-outline" id="permanent" onclick="typeofpass('permanent')"><i class="fas fa-infinity mr-2"></i>Постоянный</button>
    </div>
    <input type="hidden" name="passtype" id="passtype" value="">
  </div>
  <div id="passprojectblock" style="display:none;">
    <hr>
    <h5 class="my-2">Выберите объект,на который оформляется пропуск</h5>
    <select class="custom-select ownersgroup my-2" name="projectname" id="projectnameforpass">
      <option value=""></option>
      @foreach($projects as $project)
        <option value="{{ $project->name }}">{{ $project->name }}</option>
      @endforeach
    </select>
    @if(count($projects)==0)
     <p class="small">Сначала добавьте хотя бы один проект</p>
    @endif
  </div>
  <div  id="visitorblock" style="display:none;">
    <hr>
    <div class="row my-3">
      <div class="col">
        <button type="button" name="button" class="btn btn-block btn-black-outline" id="pass-car" onclick="visitorofpass('pass-car')"><i class="fas fa-car mr-2"></i>Автомобиль</button>
      </div>
      <div class="col">
        <button type="button" name="button" class="btn btn-block btn-black-outline" id="pass-human" onclick="visitorofpass('pass-human')"><i class="fas fa-user mr-2"></i>Человек</button>
      </div>
      <div class="col mt-2 mt-sm-0">
        <button type="button" name="button" class="btn btn-block btn-black-outline" id="pass-mechanizm" onclick="visitorofpass('pass-mechanizm')"><i class="fas fa-truck mr-2"></i>Техника</button>
      </div>
      <input type="hidden" name="visitortype" id="visitortype" value="">
    </div>
  </div>
  <div id="pass-car-block" style="display: none;">
    <hr>
    <select class="custom-select my-2" name="numberofcar" id="passescar">
      @foreach($cars as $car)
        <option value="car-{{ $car->id }}" >{{ $car->number }}</option>
      @endforeach
      @foreach($t_cars as $t_car)
        <option value="t-{{ $t_car->id }}">{{ $t_car->number }}</option>
      @endforeach
    </select>
    <div class="scrolling-wrapper my-2">
      @foreach($cars as $car)
        <div class="card"><button type="button" class="btn btn-info btn-sm rounded" onclick="favoriteCar('car-{{ $car->id }}')">{{ $car->number }}</button></div>
      @endforeach
    </div>

    <div id="pass-new-car-block" style="display:none;">
      <hr>
      <h4 class="my-2">Дополните информацию о новом автомобиле</h4>
      <div class="input-group my-2">
        <div class="input-group-prepend">
          <span class="input-group-text" id="addonmodel">Модель</span>
        </div>
        <input type="text" class="form-control new-car" name="modelofcar" value="{{ old('modelofcar') }}" placeholder="Модель автомобиля" aria-label="Модель" aria-describedby="addonmodel">
      </div>
      <div class="input-group my-2">
        <div class="input-group-prepend">
          <label class="input-group-text" for="bodyofcar">Тип авто</label>
        </div>
        <select class="custom-select new-car" name="bodyofcar" id="bodyofcar">
          <option value="Легковое" @if (old('bodyofcar') == 'Легковое') {{ 'selected' }} @endif>Легковое</option>
          <optgroup label="Грузовое">
            <option value="Грузовое до 1,5 т" @if (old('bodyofcar') == 'Грузовое до 1,5 т') {{ 'selected' }} @endif>до 1,5 т</option>
            <option value="Грузовое до 3 т" @if (old('bodyofcar') == 'Грузовое до 3 т') {{ 'selected' }} @endif>до 3 т</option>
            <option value="Грузовое свыше 7 т" @if (old('bodyofcar') == 'Грузовое свыше 7 т') {{ 'selected' }} @endif>свыше 7 т</option>
          </optgroup>
        </select>
      </div>
      <div class="form-group my-2">
        <label for="color">Укажите цвет автомобиля</label>
        <select class="custom-select new-car my-2" name="color" id="color">
          <option value=""></option>
          <option value="Белый">Белый</option>
          <option value="Красный">Красный</option>
          <option value="Желтый">Желтый</option>
          <option value="Синий">Синий</option>
          <option value="Черный">Черный</option>
        </select>
      </div>
    </div>
    <div id="pass-data-car-block" style="display:none;">
      <div class="alert alert-primary my-2" role="alert">
        <ul>
          <li id='data-model'></li>
          <li id='data-body'></li>
          <li id='data-color'></li>
          <li id='data-fio'></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="pass-mechanizm-block" style="display:none;">
    <select class="custom-select my-2" name="passesmechanizm" id="passesmechanizm">
      @foreach($t_mechanizms as $t_mechanizm)
        <option value="t-{{ $t_mechanizm->id }}">{{ $t_mechanizm->number }}</option>
      @endforeach
    </select>
    <div class="scrolling-wrapper my-2">
      @foreach($t_mechanizms as $t_mechanizm)
        <div class="card"><button type="button" class="btn btn-info btn-sm rounded" onclick="favoriteMechanizm('t-{{ $t_mechanizm->id }}')">{{ $t_mechanizm->number }}</button></div>
      @endforeach
    </div>
    <div id="pass-data-mechanizm-block" style="display:none;">
      <div class="alert alert-primary my-2" role="alert">
        <ul>
          <li id='data-mechanizm-model'></li>
          <li id='data-mechanizm-body'></li>
          <li id='data-mechanizm-color'></li>
          <li id='data-mechanizm-price' style="display: none;"></li>
        </ul>
      </div>
    </div>
    <div id="pass-new-mechanizm-block" style="display:none;">
      <div class="input-group my-2">
        <div class="input-group-prepend">
          <span class="input-group-text" id="addonmodel-m">Модель</span>
        </div>
        <input type="text" class="form-control new-mechanizm" name="modelofmechanizm" value="{{ old('modelofmechanizm') }}" placeholder="Модель техники" aria-label="Модель" aria-describedby="addonmodel-m">
      </div>
      <div class="input-group my-2">
        <div class="input-group-prepend">
          <span class="input-group-text" id="addonnumber-m">Гос. номер</span>
        </div>
        <input type="text" class="form-control new-mechanizm" name="numberofmechanizm" value="{{ old('numberofmechanizm') }}" id="number-m" placeholder="A777AA77" aria-label="Гос. номер техники" aria-describedby="addonnumber-m">
      </div>
      <div class="input-group my-2">
        <div class="input-group-prepend">
          <label class="input-group-text" for="bodyofmechanizm">Тип техники</label>
        </div>
        <select class="custom-select new-mechanizm" name="bodyofmechanizm" id="bodyofmechanizm">
          <option value="" selected>Выберите...</option>
          @foreach($taxes as $tax)
          <option value="{{$tax->id}}" @if (old('bodyofmechanizm') == $tax->id) {{ 'selected' }} @endif>{{ $tax->type}} @if($tax->weight != 'Без ранжирования') {{$tax->weight}} @endif</option>
          @endforeach
        </select>
      </div>
      <div class="input-group my-2" id='namemechanizmblock' style="display:none">
        <div class="input-group-prepend">
          <span class="input-group-text" id="addonname-m">Наименование</span>
        </div>
        <input type="text" class="form-control" name="namemechanizm" value="{{ old('namemechanizmblock') }}" id="namemechanizm" placeholder="Кран, миксер и т.п." aria-label="Наименование" aria-describedby="addonname-m">
      </div>
      <div class="form-group my-2">
        <label for="colormechanizm">Укажите цвет автомобиля</label>
        <select class="custom-select new-mechanizm my-2" name="colormechanizm" id="colormechanizm">
          <option value="Белый">Белый</option>
          <option value="Красный">Красный</option>
          <option value="Желтый">Желтый</option>
          <option value="Синий">Синий</option>
          <option value="Черный">Черный</option>
        </select>
      </div>
    </div>
  </div>
  <div id='add-driver-block' class="row my-3" style="display:none;">
    <div class="col col-sm-4"></div>
    <div class="col-12 col-sm-4">
      <button type="button" name="button" class="btn btn-block btn-black-outline" id='add-driver-btn' onclick="showDriverSelect()"><i class="fas fa-address-card mr-2"></i><span id='add-driver-text'>Указать владельца</span></button>
    </div>
    <div class="col col-sm-4"></div>
    <input type="hidden" name="driver" id="driver" value="">
  </div>
  <div id="pass-human-block" style="display:none;">
    <select class="custom-select my-2" name="fio" id="fio">
      @foreach($bios as $bio)
        <option value="const-{{ $bio->user_id }}">{{ $bio->surname }} {{ $bio->name }} {{ $bio->lastname }}</option>
      @endforeach
      @foreach($t_users as $t_user)
        <option value="t-{{ $t_user->id }}" @if (old('fio') == $t_user->name) {{ 'selected' }} @endif>{{ $t_user->surname }} {{ $t_user->name }} {{ $t_user->lastname }}</option>
      @endforeach
    </select>
    <div class="scrolling-wrapper my-2">
      @foreach($bios as $bio)
        <div class="card"><button type="button" class="btn btn-info btn-sm rounded" onclick="favoriteHuman('const-{{ $bio->user_id }}')">{{ $bio->surname }} {{ $bio->name }} {{ $bio->lastname }}</button></div>
      @endforeach
    </div>

    <div id="add-idents-block" style="display: none;">
      <div class="row my-3">
        <div class="col">
          <label class="btn btn-block btn-black-outline" id="avatarbtn" data-toggle="tooltip" data-placement="bottom" title="Прикрепите фото человека">
              <input type="file" name="avatar" id="avatar" class="d-none"/>
              <i class="fas fa-portrait mr-2"></i>Добавить фото
              <i class="fas fa-check ml-2" style='display:none' id='avatarcheck'></i>
          </label>
          <p class="small" id="avatarname"></p>
        </div>
        <div class="col">
          <label class="btn btn-block btn-black-outline" id="passportbtn" data-toggle="tooltip" data-placement="bottom" title="Прикрепите скан паспорта">
              <input type="file" name="passport" id="passport" class="d-none"/>
              <i class="fas fa-passport mr-2"></i>Добавить паспорт
              <i class="fas fa-check ml-2" style='display:none' id='passportcheck'></i>
          </label>
          <p class="small" id="passportname"></p>
        </div>
      </div>
    </div>
  </div>
  <div id="one-time-block" style="display:none;">
    <hr>
    <h3 class="my-2">Укажите дату на въезд для пропуска</h3>
    <div class="input-group my-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="prependddate_entry">Дата приезда</span>
      </div>
      <input type="date" class="form-control one-time" name="date_entry" id="date_entry" value="{{ old('date_entry') ?? Carbon\Carbon::now()->format('Y-m-d') }}" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" aria-describedby="prependdate_entry">
      <div class="invalid-feedback">
        Пожалуйста выберите дату приезда
      </div>
    </div>
  </div>
  <div id="permanent-block" style="display:none;">
    <hr>
    <h3 class="my-2">Укажите график для пропуска</h3>
    <select class="custom-select my-2" name="timetable[]" id="timetable" multiple="multiple">
      <option value="Ежедневно">Ежедневно</option>
      <option value="Будни">Будни</option>
      <option value="Выходные">Выходные</option>
      <option value="Пн">Понедельник</option>
      <option value="Вт">Вторник</option>
      <option value="Ср">Среда</option>
      <option value="Чт">Четверг</option>
      <option value="Пт">Пятница</option>
      <option value="Сб">Суббота</option>
      <option value="Вс">Воскресенье</option>
    </select>
  </div>
  <div id="commentwithbtnblock" style="display:none;">
    <div class="form-group my-2" id="commentblock" style="display:none;">
      <textarea class="form-control" name="comment" id="comment" placeholder="Оставьте свой комментарий, если нужно" rows="2"></textarea>
    </div>
    <div class="text-right my-2">
      <p class="small" id="commentblocktext">Добавьте комментарий</p>
      <label class="custom-btn-show" data-toggle="tooltip" data-placement="left" title="Добавить комментарий" onclick="showComments('commentblock')">
          <i class="fas fa-plus" id="commentblockplus"></i>
      </label>
    </div>
  </div>

  <div class="row my-3" id='submitPassesForm-block' style="display:none;">
    <div class="col col-sm-4"></div>
    <div class="col-12 col-sm-4">
      <button type="submit" name="button" class="btn btn-block btn-dark">Оформить пропуск</button>
    </div>
    <div class="col col-sm-4"></div>
  </div>
</form>
