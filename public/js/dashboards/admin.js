$(document).ready(function () {
  $("#phone").inputmask({"mask": "+7(999)999-9999","autoUnmask" : true, "removeMaskOnSubmit" : true });

  if($('#role').val() != null){
    initForm($('#role').val());
  }


  $('#role').change(function(){
    initForm(this.value);
  });

  $('#bodyofmechanizm').change(function(){
    var text = $("#bodyofmechanizm option:selected").html();
    var input = text.split(" ");
    if(input[0] == 'Спецтехника'){
      $('#namemechanizmblock').show();
      $('#namemechanizm').attr('required', true);
    }else{
      $('#namemechanizmblock').hide();
      $('#namemechanizm').attr('required', false);
    }
  });

  $('form input[name=avatar]').on('change', function() {
    var text = $('#avatarname');
    var str = "Файл: ";
    str += this.files[0].name;
    text.text(str);
    if(this.files.length >0){
      $('#avatarcheck').show();
    }else{
      $('#avatarcheck').hide();
    }
  });

  $('form input[name=passport]').on('change', function() {
    var text = $('#passportname');
    var str = "Файл: ";
    str += this.files[0].name;
    text.text(str);
    if(this.files.length >0){
      $('#passportcheck').show();
    }else{
      $('#passportcheck').hide();
    }
  });


  var token = "67fd1083a94980b339851baf73f373e31510c813";

  $("#address").suggestions({
    token: token,
    type: "ADDRESS",
    onSelect: showSelected
  });
});

function initForm(val){
  if(val == 'Работник'){
    $('#engeenerblock').show();
    $(".engeener").attr("required", true);
    initTypeOfJob();
    initEquipment();
  }else{
    $('#engeenerblock').hide();
    $(".engeener").attr("required", false);
  }
  if(($('option:selected', this).closest('optgroup').attr('label') == 'Группа работников')||(val == 'Менеджер')){
    $('#organizationblock').show();
    $(".organization").attr("required", true);
    initOrg();
  }else{
    $('#organizationblock').hide();
    $(".organization").attr("required", false);
  }

  if(val == 'Собственник'){
    $('#projectblock').show();
    $(".project").attr("required", true);
    initOrg();
  }else{
    $('#projectblock').hide();
    $(".project").attr("required", false);
  }

  if((val == 'Член семьи')||(val == 'Представитель собственника')||(val == 'Охранник территории/дома')){
    $('#ownersgroupblock').show();
    $(".ownersgroup").attr("required", true);
    initProjects();
  }else{
    $('#ownersgroupblock').hide();
    $(".ownersgroup").attr("required", false);
  }
}

function initTypeOfJob(){
  $('#typeofjob').select2({
    placeholder: 'Выберите вид работ',
    tags: true,
    dropdownParent: $('#engeenerblock')
  });
}

function initEquipment(){
  $('#equipment').select2({
    placeholder: 'Выберите инструменты',
    dropdownParent: $('#engeenerblock')
  });
}

function initOrg(){
  $('#organization').select2({
    placeholder: 'Выберите организацию',
    tags: true,
    dropdownParent: $('#organizationblock')
  });
}

function initProjects(){
  $('#projectname').select2({
    placeholder: 'Выберите проект',
    tags: true,
    dropdownParent: $('#organizationblock')
  });
}

function initColorOfCar(parrent){
  $('#color').select2({
    placeholder: 'Выберите цвет',
    tags: true,
    multiple: true,
    maximumSelectionLength: 1,
    dropdownParent: parrent
  });
}

function initColorOfMechanizm(parrent){
  $('#colormechanizm').select2({
    placeholder: 'Выберите цвет',
    tags: true,
    multiple: true,
    maximumSelectionLength: 1,
    dropdownParent: parrent
  });
}

function showFormsItems(id){
  var el = document.getElementById(id+'block');
  var obj = document.getElementById(""+id+"blockplus");
  if(el.classList.contains('showed')){
    obj.style.transform = "rotate(0deg)";
    $('#'+id+'block').hide();
    $("."+id).attr("required", false);
    el.classList.remove("showed");
  }else{
    $('#'+id+'block').show();
    el.classList.add("showed");
    $("."+id).attr("required", true);
    if(id == "car"){
      initColorOfCar($('#carblock'));
    }
    obj.style.transform = "rotate(45deg)";
  }
}

var car = 2;

function addNewCar() {
  if(car < 10){
    if(car==2){
      document.getElementById("titlecar1").style.display = "block";
      document.getElementById("deletlastcar").disabled = false;
    }
    var carblock = document.getElementById("carblock"+car);
    var str = ''+
    '<h4 class="my-3">Автомобиль №'+car+'</h4>'+
    '<div class="input-group my-2">'+
      '<div class="input-group-prepend">'+
        '<span class="input-group-text" id="addonmodel'+car+'">Модель</span>'+
      '</div>'+
      '<input type="text" class="form-control" name="modelofcar'+car+'" placeholder="Модель автомобиля" aria-label="Модель" aria-describedby="addonmodel'+car+'" required>'+
    '</div>'+
    '<div class="input-group my-2">'+
      '<div class="input-group-prepend">'+
        '<span class="input-group-text" id="addonnumber'+car+'">Гос. номер</span>'+
      '</div>'+
      '<input type="text" class="form-control car" name="numberofcar'+car+'" placeholder="Гос. номер автомобиля" aria-label="Гос. номер автомобиля" aria-describedby="addonnumber'+car+'">'+
    '</div>'+
    '<div class="input-group my-2">'+
      '<div class="input-group-prepend">'+
        '<label class="input-group-text" for="typeofcar'+car+'">Тип владения</label>'+
      '</div>'+
      '<select class="custom-select" name="typeofcar'+car+'" id="typeofcar'+car+'" required>'+
        '<option value="" selected>Выберите...</option>'+
        '<option value="Постоянное">Постоянное</option>'+
        '<option value="Временное">Временное</option>'+
      '</select>'+
    '</div>'+
    '<div class="input-group my-2">'+
      '<div class="input-group-prepend">'+
        '<label class="input-group-text" for="bodyofcar'+car+'">Тип авто</label>'+
      '</div>'+
      '<select class="custom-select" name="bodyofcar'+car+'" id="bodyofcar'+car+'" required>'+
        '<option value="" selected>Выберите...</option>'+
        '<option value="Легковое">Легковое</option>'+
        '<optgroup label="Грузовое">'+
          '<option value="Грузовое до 1,5 т">до 1,5 т</option>'+
          '<option value="Грузовое до 3 т">до 3 т</option>'+
          '<option value="Грузовое свыше 7 т">свыше 7 т</option>'+
        '</optgroup>'+
      '</select>'+
    '</div>'+
    '<div class="form-group my-2">'+
      '<label for="color'+car+'">Укажите цвет автомобиля</label>'+
      '<select class="custom-select my-2" name="color'+car+'" id="color'+car+'" required>'+
        '<option value="Белый">Белый</option>'+
        '<option value="Красный">Красный</option>'+
        '<option value="Желтый">Желтый</option>'+
        '<option value="Синий">Синий</option>'+
        '<option value="Черный">Черный</option>'+
      '</select>'+
    '</div>'+
    '<div id="carblock'+(car+1)+'"></div>';
    carblock.innerHTML = str;
    $('#color'+car+'').select2({
      placeholder: 'Выберите цвет',
      tags: true,
      dropdownParent: $('#carblock'+car+'')
    });
    car++;
    //$('#inoeclose').show();
  }else{
    alert('Больше не получается добавить, приносим свои извинения');
  }
}

function deleteLatestCar(){
  if(car > 0){
    car--;
    var carblock = document.getElementById("carblock"+(car));
    carblock.innerHTML = '';
  }else{
    alert('Полей для удаление больше нет');
  }
  if(car == 2 ){
    document.getElementById("titlecar1").style.display = "none";
    document.getElementById("deletlastcar").disabled = true;
  }
}

//пропуска


var typeid = '';
function typeofpass(id){
  var btn = document.getElementById(id);
  if(id != typeid){
    btn.classList.add("btn-active");
    $('#passtype').val(id);
    if(typeid !=''){
      document.getElementById(typeid).classList.remove("btn-active");
      $('#'+typeid+'-block').hide();
    }
    $('#'+id+'-block').show();
    //$('#passprojectblock').show();
    //initPassesProjects();
    $('#visitorblock').show();

    var passcarval = $('#passescar').val()+'';
    var passmechval = $('#passesmechanizm').val()+'';
    if(id == 'permanent'){
      initTimetable();
      $('#timetable').attr('required', true);
      if(visitorid == 'pass-car'){
        if(passcarval != ''){
          var input = passcarval.split("-");
          if(input[0] == 'new'){
            $('#pass-new-car-block').show();
            $('.new-car').attr('required', true);
            initColorOfCar($('#pass-new-car-block'));
          }
        }
      }

      if(visitorid == 'pass-mechanizm'){
        if(passmechval != ''){
          var inputmech = passmechval.split("-");
          if(inputmech[0] != 'new'){
            $('#data-mechanizm-price').hide();
          }
        }
      }
    }

    if(id == 'one-time'){
      $('#timetable').attr('required', false);
      if(visitorid == 'pass-mechanizm'){
        if(passmechval != ''){
          var inputmech = passmechval.split("-");
          if(inputmech[0] != 'new'){
            $('#data-mechanizm-price').show();
          }
        }
      }
      if(visitorid == 'pass-car'){
        if(passcarval != ''){
          var input = passcarval.split("-");
          if(input[0] == 'new'){
            $('#pass-new-car-block').hide();
          }else{
            $('.new-car').attr('required', true);
          }
        }
      }
    }

    typeid = id;
  }
}

var visitorid = '';
function visitorofpass(id){
  var btn = document.getElementById(id);
  if(id != visitorid){
    $('#visitortype').val(id);
    btn.classList.add("btn-active");
    if(visitorid !=''){
      document.getElementById(visitorid).classList.remove("btn-active");
      $('#'+visitorid+'-block').hide();
    }else{
      $('#submitPassesForm-block').show();
      $('#commentwithbtnblock').show();
    }
    $('#'+id+'-block').show();

    visitorid = id;
    var passcarval = $('#passescar').val()+'';
    var passmechval = $('#passesmechanizm').val()+'';

    if(id == 'pass-car'){
      initPassesCar();
      $('#passescar').attr('required', true);
      $('#pass-new-car-block').hide();
      $('#pass-data-car-block').hide();
      if(!countofDriverselect){
        showDriverSelect();
      }
      $('#add-driver-block').hide();
      console.log('kek')
      $('.new-car').attr('required', false);
      $('#passesmechanizm').attr('required', false);
      $('.new-mechanizm').attr('required', false);
      $('#fio').attr('required', false);
    }

    if(id == 'pass-mechanizm'){
      initPassesMechanizm();
      $('#passesmechanizm').attr('required', true);
      $('#pass-new-mechanizm-block').hide();
      $('#pass-data-mechanizm-block').hide();
      if(!countofDriverselect){
        showDriverSelect();
      }
      $('#add-driver-block').hide();
      console.log('lol')
      $('#passescar').attr('required', false);
      $('.new-car').attr('required', false);
      $('.new-mechanizm').attr('required', false);
      $('#fio').attr('required', false);
    }

    if(id == 'pass-human'){
      initFIO();
      $('#fio').attr('required', true);
      $('#add-driver-block').hide();
      $('#add-idents-block').hide();
      $('#avatar').val('');
      $('#avatarcheck').hide('');
      $('#avatarname').text('');
      $('#passport').val('');
      $('#passportcheck').hide('');
      $('#passportname').text('');
      console.log('lolkek')
      $('#passescar').attr('required', false);
      $('.new-car').attr('required', false);
      $('#passesmechanizm').attr('required', false);
      $('.new-mechanizm').attr('required', false);
    }

  }
}

function initPassesProjects(){
  $('#projectnameforpass').select2({
    placeholder: 'Выберите проект',
    dropdownParent: $('#passprojectblock')
  });
}

function initPassesCar() {
  $('#passescar').select2({
    placeholder: 'Гос номер в формате А777АА77',
    multiple: true,
    maximumSelectionLength: 1,
    tags: true,
    createTag: newCar,
    dropdownParent: $('#pass-car-block'),
  }).on("select2:select", function(e) {
    if(e.params.data.newTag){
      if(typeid == 'permanent'){
        $('#pass-new-car-block').show();
        $('.new-car').attr('required', true);
        initColorOfCar($('#pass-new-car-block'));
      }
      $('#add-driver-block').show();
      $('#pass-data-car-block').hide();
    }else{
      $('#add-driver-block').hide();
      $('#pass-human-block').hide();
      $('#pass-new-car-block').hide();
      $('.new-car').attr('required', false);
      checkDataOfCar();
    }
  });
  $('#passescar').on( "select2:unselect" , function (e ) {
    $('#pass-data-car-block').hide();
    if(e.params.data.newTag){
      $('#add-driver-block').hide();
      $('#pass-human-block').hide();
      $('#pass-new-car-block').hide();
      $('.new-car').attr('required', false);
    }
  });
  $("#passescar").val('').trigger('change.select2');
}

function favoriteCar(id){
  $("#passescar").val(id).trigger('change.select2');
  $('.new-car').attr('required', false);
  $('#add-driver-block').hide();
  $('#pass-human-block').hide();
  $('#pass-new-car-block').hide();
  checkDataOfCar();
}
function checkDataOfCar() {
  var val = $('#passescar').val();
  var input = val[0].split("-");
  var type = input[0];
  var id = input[1];
  $.ajax({
      url:     window.location.origin+'/api/car', //Адрес подгружаемой страницы
      type:     "POST", //Тип запроса
      data: {"_token": $('meta[name="csrf-token"]').attr('content'), "type": type, 'id' : id},
      success: function(response) { //Если все нормально
          $('#pass-data-car-block').show();
          $('#data-model').text('Модель: '+response['model']);
          $('#data-body').text('Тип: '+response['body']);
          $('#data-color').text('Цвет: '+response['color']);
          $('#data-fio').text('Владелец: '+response['fio']);
      }
  });
}

function newCar(params, data){
    var term = $.trim(params.term);
    if (term === '') {
      return null;
    }
      return {
      id: 'new-'+term,
      text: term,
      newTag: true // add additional parameters
    }
}

var countofDriverselect = true;
function showDriverSelect(){
  if(countofDriverselect){
    countofDriverselect = false;
    $('#driver').val('need');
    $('#pass-human-block').show();
    $('#add-idents-block').hide();
    initFIO();
    $('#fio').attr('required', true);
    $('#add-driver-text').text('Не указывать владельца');
  }else{
    countofDriverselect = true;
    $('#pass-human-block').hide();
    $('#fio').attr('required', false);
    $('#driver').val(null);
    $('#add-driver-text').text('Указать владельца');
  }
}

function initFIO() {
  if(visitorid == 'pass-car'){
    var placeholder = 'Можно указать ФИО владельца авто';
  }else{
    var placeholder = 'Укажите ФИО';
  }
  $('#fio').select2({
    placeholder: placeholder,
    tags: true,
    multiple: true,
    maximumSelectionLength: 1,
    createTag: newHuman,
    dropdownParent: $('#pass-human-block')
  }).on("select2:select", function(e) {
    if(e.params.data.newTag){
      $('#add-idents-block').show();
    }else{
      checkDataOfHuman();
      $('#avatar').val('');
      $('#avatarcheck').hide('');
      $('#avatarname').text('');
      $('#passport').val('');
      $('#passportcheck').hide('');
      $('#passportname').text('');
    }
  });
  $('#fio').on( "select2:unselect" , function (e ) {
    $('#add-idents-block').hide();

  });
  $("#fio").val(null).trigger('change.select2');
}

function favoriteHuman(id){
  $("#fio").val(id).trigger('change.select2');
  checkDataOfHuman();
  $('#avatar').val('');
  $('#avatarcheck').hide('');
  $('#avatarname').text('');
  $('#passport').val('');
  $('#passportcheck').hide('');
  $('#passportname').text('');
}

function newHuman(params, data){
    var term = $.trim(params.term);
    if (term === '') {
      return null;
    }
      return {
      id: 'new-'+term,
      text: term,
      newTag: true // add additional parameters
    }
}

function checkDataOfHuman() {
  var val = $('#fio').val();
  var input = val[0].split("-");
  var type = input[0];
  var id = input[1];
  $.ajax({
      url:     window.location.origin+'/api/human', //Адрес подгружаемой страницы
      type:     "POST", //Тип запроса
      data: {"_token": $('meta[name="csrf-token"]').attr('content'), 'type': type, 'id' : id},
      success: function(response) { //Если все нормально
          console.log(response);
          $('#add-idents-block').show();
          if(response['avatar'] != 'Нет'){
            var text = $('#avatarname');
            var str = "Фотография уже добавлена в базу";
            text.text(str);
            $('#avatarcheck').show();
            $('#avatar').attr('disabled', 'disabled');
          }
          if(response['documents'] != 'Нет'){
            var text = $('#passportname');
            var str = "Скан пасспорта уже добавлен в базу";
            text.text(str);
            $('#passportcheck').show();
            $('#passport').attr('disabled', 'disabled');
          }
          if((response['avatar'] == 'Нет')&&(response['documents'] == 'Нет')){
          }else{

            if(response['avatar'] == 'Нет'){

            }
          }
      }
  });
}

function initPassesMechanizm() {
  $('#passesmechanizm').select2({
    placeholder: 'Гос номер в формате А777АА77',
    tags: true,
    multiple: true,
    maximumSelectionLength: 1,
    createTag: newMechanizm,
    dropdownParent: $('#pass-mechanizm-block'),
  }).on("select2:select", function(e) {
    if(e.params.data.newTag){
      $('#pass-new-mechanizm-block').show();
      $('.new-mechanizm').attr('required', true);
      $('#number-m').val(e.params.data.text);
      initColorOfMechanizm($('#pass-new-mechanizm-block'));
      $('#add-driver-block').show();
      //$('#pass-data-car-block').hide();
    }else{
      $('#add-driver-block').hide();
      $('.new-mechanizm').attr('required', false);
      $('#namemechanizm').attr('required', false);
      $('#pass-new-mechanizm-block').hide();
      checkDataOfMechanizm();
    }
  });

  $('#passesmechanizm').on( "select2:unselect" , function (e ) {
    $('#pass-data-mechanizm-block').hide();
    if(e.params.data.newTag){
      $('#pass-new-mechanizm-block').hide();
      $('.new-mechanizm').attr('required', false);
      $('#add-driver-block').hide();
    }
  });
  $("#passesmechanizm").val('').trigger('change.select2');
}

function favoriteMechanizm(id){
  $("#passesmechanizm").val(id).trigger('change.select2');
  $('.new-mechanizm').attr('required', false);
  $('#namemechanizm').attr('required', false);
  $('#pass-human-block').hide();
  $('#pass-new-mechanizm-block').hide();
  checkDataOfMechanizm();
}
function checkDataOfMechanizm() {
  var val = $('#passesmechanizm').val();
  var input = val[0].split("-");
  var type = input[0];
  var id = input[1];

  $.ajax({
      url:     window.location.origin+'/api/mechanizm', //Адрес подгружаемой страницы
      type:     "POST", //Тип запроса
      data: {"_token": $('meta[name="csrf-token"]').attr('content'), 'id' : id},
      success: function(response) { //Если все нормально
          $('#pass-data-mechanizm-block').show();
          $('#data-mechanizm-model').text('Модель: '+response['model']);
          $('#data-mechanizm-body').text('Тип: '+response['name']);
          $('#data-mechanizm-color').text('Цвет: '+response['color']);
          $('#data-mechanizm-price').text('Цена за въезд: '+response['price']+' рублей');
          if(typeid == 'one-time'){
            $('#data-mechanizm-price').show();
          }else{
            $('#data-mechanizm-price').hide();
          }

      }
  });
}

function newMechanizm(params, data){
    var term = $.trim(params.term);
    if (term === '') {
      return null;
    }
      return {
      id: 'new-'+term,
      text: term,
      newTag: true // add additional parameters
    }
}

function initTimetable() {
  $('#timetable').select2({
    placeholder: 'Укажите график приезда',
    dropdownParent: $('#permanent-block')
  });
}

function showComments(id){
  var el = document.getElementById(id);
  var obj = document.getElementById(""+id+"plus");
  if(el.classList.contains('showed')){
    obj.style.transform = "rotate(0deg)";
    $('#'+id).hide();
    $('#'+id+"text").show();
    el.classList.remove("showed");
  }else{
    $('#'+id).show();
    $('#'+id+"text").hide();
    el.classList.add("showed");
    obj.style.transform = "rotate(45deg)";
  }
}

//Список пропусков
function showMore(id){
  var el = document.getElementById(id);
  var obj = document.getElementById(""+id+"plus");
  if(el.classList.contains('showed')){
    obj.style.transform = "rotate(0deg)";
    $('#'+id).hide();
    $('#'+id+"text").show();
    el.classList.remove("showed");
  }else{
    $('#'+id).show();
    $('#'+id+"text").hide();
    el.classList.add("showed");
    obj.style.transform = "rotate(45deg)";
  }
}

//DaData block
function join(arr /*, separator */) {
  var separator = arguments.length > 1 ? arguments[1] : ", ";
  return arr.filter(function(n){return n}).join(separator);
}

function geoQuality(qc_geo) {
  var localization = {
    "0": "точные",
    "1": "ближайший дом",
    "2": "улица",
    "3": "населенный пункт",
    "4": "город"
  };
  return localization[qc_geo] || qc_geo;
}

function geoLink(address) {
  return join(["<a target=\"_blank\" href=\"",
               "https://maps.yandex.ru/?text=",
               address.geo_lat, ",", address.geo_lon, "\">",
               address.geo_lat, ", ", address.geo_lon, "</a>"], "");
}

function showPostalCode(address) {
  $("#postal_code").val(address.postal_code);
}

function showRegion(address) {
  $("#region").val(join([
    join([address.region_type, address.region], " "),
    join([address.area_type, address.area], " ")
  ]));
}

function showCity(address) {
  $("#city").val(join([
    join([address.city_type, address.city], " "),
    join([address.settlement_type, address.settlement], " ")
  ]));
}

function showStreet(address) {
  $("#street").val(
    join([address.street_type, address.street], " ")
  );
}

function showHouse(address) {
  $("#numberofhouse").val(join([
    join([address.house_type, address.house], " "),
    join([address.block_type, address.block], " ")
  ]));
}

function showFlat(address) {
  $("#flat").val(
    join([address.flat_type, address.flat], " ")
  );
}

function showGeo(address) {
  if (address.qc_geo != "5") {
    var geo = geoLink(address) + " (" + geoQuality(address.qc_geo) + ")";
    $("#geo").html(geo);
  }
}

function showSelected(suggestion) {
  var address = suggestion.data;
  var el = document.getElementById('resultaddress');
  el.style.display = "block";
  showRegion(address);
  showCity(address);
  showStreet(address);
  showHouse(address);
}
