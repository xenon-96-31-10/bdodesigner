<div class="input-group my-2">
  <div class="input-group-prepend">
    <span class="input-group-text car" id="addonmodel">Модель</span>
  </div>
  <input type="text" class="form-control car" name="modelofcar" value="{{ old('modelofcar') }}" placeholder="Модель автомобиля" aria-label="Модель" aria-describedby="addonmodel">
</div>
<div class="input-group my-2">
  <div class="input-group-prepend">
    <span class="input-group-text car" id="addonnumber">Гос. номер</span>
  </div>
  <input type="text" class="form-control car" name="numberofcar" value="{{ old('numberofcar') }}" placeholder="Гос. номер автомобиля" aria-label="Гос. номер автомобиля" aria-describedby="addonnumber">
</div>
<div class="input-group my-2">
  <div class="input-group-prepend">
    <label class="input-group-text" for="typeofcar">Тип владения</label>
  </div>
  <select class="custom-select car" name="typeofcar" id="typeofcar">
    <option value="" selected>Выберите...</option>
    <option value="Постоянное" @if (old('typeofcar') == 'Постоянное') {{ 'selected' }} @endif>Постоянное</option>
    <option value="Временное" @if (old('typeofcar') == 'Временное') {{ 'selected' }} @endif>Временное</option>
  </select>
</div>
<div class="input-group my-2">
  <div class="input-group-prepend">
    <label class="input-group-text" for="bodyofcar">Тип авто</label>
  </div>
  <select class="custom-select car" name="bodyofcar" id="bodyofcar">
    <option value="" selected>Выберите...</option>
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
  <select class="custom-select car my-2" name="color" id="color">
    <option value="Белый">Белый</option>
    <option value="Красный">Красный</option>
    <option value="Желтый">Желтый</option>
    <option value="Синий">Синий</option>
    <option value="Черный">Черный</option>
  </select>
</div>
