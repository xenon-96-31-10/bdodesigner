<form method="post" action="{{ route('admin.users.create')}}" class="needs-validation" id="registerForm">
  @csrf
  <div class="input-group my-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="role">Роль пользователя</label>
    </div>
    <select class="custom-select" name="role" id="role" required>
      <option value="" selected>Выберите...</option>
      @foreach($roles as $rol)
        @if($rol->slug == 'admin')
          <optgroup label="Группа управляющих">
          <option value="{{ $rol->name }}" @if(old('role') == $rol->name) {{ 'selected' }} @endif>{{ $rol->name }}</option>
        @elseif($rol->slug == 'manager')
          <option value="{{ $rol->name }}" @if(old('role') == $rol->name) {{ 'selected' }} @endif>{{ $rol->name }}</option>
          </optgroup>
        @elseif($rol->slug == 'owner')
          <optgroup label="Группа собственника">
          <option value="{{ $rol->name }}" @if(old('role') == $rol->name) {{ 'selected' }} @endif>{{ $rol->name }}</option>
        @elseif($rol->slug == 'owners-rep')
          <option value="{{ $rol->name }}" @if(old('role') == $rol->name) {{ 'selected' }} @endif>{{ $rol->name }}</option>
          </optgroup>
          <optgroup label="Группа работников" id='workers'>
        @else
          <option value="{{ $rol->name }}" @if(old('role') == $rol->name) {{ 'selected' }} @endif>{{ $rol->name }}</option>
        @endif
      @endforeach
      </optgroup>
    </select>
  </div>
  <div class="form-row my-2">
    <div class="col-12 col-sm-6 mb-2 mb-sm-0">
      <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Телефон" required>
      @error('phone')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <div class="col-12 col-sm-6 mb-2 mb-sm-0">
      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="E-mail" required>
      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
  </div>
  <div id="ownersgroupblock" style="display:none;">
    <hr>
    <h3 class="my-2">Привязка к существующему объекту</h3>
    <select class="custom-select ownersgroup my-2" name="projectname" id="projectname">
      @foreach($projects as $project)
        <option value="{{ $project->name }}">{{ $project->name }}</option>
      @endforeach
    </select>
    @if(count($projects)==0)
     <p class="small">Сначала добавьте хотя бы один проект</p>
    @endif
  </div>
  <div id='projectblock' style="display: none;">
    <hr>
    <h3 class="my-2">Привязка к новому объекту</h3>
    <div class="input-group my-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="typeofproject">Тип объекта</label>
      </div>
      <select class="custom-select project" name="typeofproject" id="typeofproject" required>
        <option value="" selected>Выберите...</option>
        @foreach($typeofprojects as $typeofproject)
            <option value="{{ $typeofproject->slug }}" @if (old('typeofproject') == $typeofproject->slug) {{ 'selected' }} @endif>{{ $typeofproject->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group my-3">
      <label for="name">Название объекта</label>
      <input type="text" class="form-control project" name="nameofnewproject" id="nameofnewproject" value="{{ old('nameofnewproject') }}" placeholder="Название проекта">
    </div>
    <div class="form-group my-3">
      <label for="description">Краткое описание объекта</label>
      <textarea class="form-control" name="description" id="description" placeholder="Краткое описание проекта" rows="2">{{ old('description') }}</textarea>
      <div class="invalid-feedback">
        Пожалуйста, заполните поле с Вашими пожеланиями, ведь это поможет с формированием проекта.
      </div>
    </div>
    <div class="form-group my-3">
      <label for="name">Поиск адреса</label>
      <input type="text" class="form-control project" name="address" id="address" value="{{ old('address') }}" placeholder="Напишите адрес">
    </div>
    <div id="resultaddress" style="@if(old('address') != null) display: block; @else display: none;@endif">
      <div class="form-row my-2">
        <div class="col-12 col-sm-3">
          <div class="form-group">
            <label for="city">Регион</label>
            <input type="text" class="form-control project" name="region" id="region" value="{{ old('region') }}" placeholder="Регион">
          </div>
        </div>
        <div class="col-12 col-sm-3">
          <div class="form-group">
            <label for="city">Город</label>
            <input type="text" class="form-control project" name="city" id="city" value="{{ old('city') }}" placeholder="Город">
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="form-group">
            <label for="street">Улица</label>
            <input type="text" class="form-control project" name="street" id="street" value="{{ old('street') }}" placeholder="Улица">
          </div>
        </div>
      </div>
      <div class="form-row my-2">
        <div class="col-12 col-sm-2">
          <div class="form-group">
            <label for="numberofhouse">Номер дома</label>
            <input type="text" class="form-control project" name="numberofhouse" id="numberofhouse" value="{{ old('numberofhouse') }}" placeholder="Номер дома">
          </div>
        </div>
        <div class="col-12 col-sm-2">
          <div class="form-group">
            <label for="numberofroom">Номер помещения</label>
            <input type="text" class="form-control project" name="numberofroom" id="numberofroom" value="{{ old('numberofroom') }}" placeholder="Номер помещения">
          </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class="form-group">
            <label for="totalarea">Общая площадь, м<sup>2</sup></label>
            <input type="number" class="form-control project" name="totalarea" id="totalarea" value="{{ old('totalarea') }}" step="any" min="50" placeholder="Общая площадь">
          </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class="form-group">
            <label for="livingarea">Жилая площадь, м<sup>2</sup></label>
            <input type="number" class="form-control project" name="livingarea" id="livingarea" value="{{ old('livingarea') }}" step="any" min="30" placeholder="Жилая площадь">
          </div>
        </div>
      </div>
    </div>

  </div>
  <div id="organizationblock" style="display:none;">
    <hr>
    <h3 class="my-2">Организация</h3>
    <select class="custom-select organization my-2" name="organization" id="organization">
      @foreach($organizations as $organization)
        <option value="{{ $organization->name }}" @if (old('organization') == $organization->name) {{ 'selected' }} @endif>{{ $organization->name }}</option>
      @endforeach
    </select>
  </div>
  <div id="engeenerblock" style="display:none;">
    <hr>
    <h3 class="my-2">Вид выполняемых работ</h3>
    <select class="custom-select" name="typeofjob[]" id="typeofjob" multiple="multiple">
      @foreach($activities as $activiti)
        <option value="{{ $activiti->name }}" {{ (collect(old('typeofjob'))->contains($activiti->name )) ? 'selected':'' }}>{{ $activiti->name }}</option>
      @endforeach
    </select>

    <h3 class="mt-3 mb-2">Прикрепление оборудования к работнику</h3>
    <select class="custom-select" name="equipment[]" id="equipment" multiple="multiple">
      @foreach($equipments as $equipment)
        @if($equipment->value > 0)
          <option value="{{ $equipment->name }}" {{ (collect(old('equipment'))->contains($equipment->name )) ? 'selected':'' }}>{{ $equipment->name }}</option>
        @else
          <option value="{{ $equipment->name }}" disabled>{{ $equipment->name }}</option>
        @endif
      @endforeach
    </select>
  </div>
  <hr>
  <h3 class="my-3">Персональные данные пользователя</h3>
  <div id="bioblock" style=@if(old('name') != null)"display: block;" class="showed" @else "display: none;"@endif>
    @include('partials.dashboards.users.bio')
  </div>
  <div class="text-right my-2">
    <label class="custom-add" data-toggle="tooltip" data-placement="left" title="Заполнить сейчас" onclick="showFormsItems('bio')">
        <i class="fas fa-plus" id="bioblockplus"></i>
    </label>
  </div>
  <hr>
  <h3 class="my-3">Персональный транспорт</h3>
  <div id="carblock" style=@if(old('modelofcar') != null)"display: block;" class="showed" @else "display: none;"@endif>
    <h4 class="my-3" id='titlecar1' style="display:none;">Автомобиль №1</h4>
    @include('partials.dashboards.users.car')
    <div id="carblock2"></div>
    <div class="d-flex justify-content-center">
      <div class="btn-group text-center justify-content-center" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Удалить добавленный автомобиль" id="deletlastcar" onclick="deleteLatestCar()" disabled><i class="fas fa-minus"></i></button>
         <button type="button" class="btn btn-light" disabled><i class="fas fa-car"></i></button>
        <button type="button" class="btn btn-dark" data-toggle="tooltip" data-placement="right" title="Добавить еще один автомобиль" id="addnewcar" onclick="addNewCar();"><i class="fas fa-plus"></i></button>
      </div>
    </div>
  </div>
  <div class="text-right my-2">
    <label class="custom-add" data-toggle="tooltip" data-placement="left" title="Добавить сейчас" onclick="showFormsItems('car')">
        <i class="fas fa-plus" id="carblockplus"></i>
    </label>
  </div>
  <hr>
  <div class="input-group my-3">
    <button class="btn btn-lg btn-black ml-auto" type="submit">Создать пользователя</button>
  </div>
</form>
