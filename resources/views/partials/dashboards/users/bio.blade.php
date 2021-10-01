<div class="form-row my-2" >
  <div class="col-12 col-sm-4 mb-2 mb-sm-0">
    <input type="text" class="form-control bio" name="name" id="name" value="{{ old('name') }}" placeholder="Имя">
  </div>
  <div class="col-12 col-sm-4  mb-2 mb-sm-0">
    <input type="text" class="form-control bio" name="lastname" id="lastname" value="{{ old('lastname') }}" placeholder="Отчество">
  </div>
  <div class="col-12 col-sm-4 mb-2 mb-sm-0">
    <input type="text" class="form-control bio" name="surname" id="surname" value="{{ old('surname') }}" placeholder="Фамилия">
  </div>
</div>
<div class="form-row my-2" >
  <div class="col-12 col-sm-6 mb-2 mb-sm-0">
    <div class="input-group">
      <div class="input-group-prepend">
        <label class="input-group-text" for="sex">Пол</label>
      </div>
      <select class="custom-select bio" name="sex" id="sex">
        <option value="" selected>Выберите...</option>
        <option value="Мужской" @if (old('sex') == 'Мужской') {{ 'selected' }} @endif>Мужской</option>
        <option value="Женский" @if (old('sex') == 'Женский') {{ 'selected' }} @endif>Женский</option>
      </select>
    </div>
  </div>
  <div class="col-12 col-sm-6  mb-2 mb-sm-0">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="prependdateofbirth">Дата рождения</span>
      </div>
      <input type="date" class="form-control bio" name="dateofbirth" id="dateofbirth" value="{{ old('dateofbirth') }}" placeholder="Дата рождения" aria-describedby="prependdateofbirth">
      <div class="invalid-feedback">
        Пожалуйста выберите дату рождения
      </div>
    </div>
  </div>
</div>
