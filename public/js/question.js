document.addEventListener("DOMContentLoaded", function(event) {
window.addEventListener('scroll', AnimEvent.add(function() {
  line.position();
}), false);
var line = new LeaderLine(
  document.getElementById('start'),
  document.getElementById('end')
);

line.setOptions({
color:'#4b6132',
endPlug: 'behind'
});

$("#tel").inputmask({"mask": "+7(999)999-9999","autoUnmask" : true, "removeMaskOnSubmit" : true });

$('form input[type=file]').on('change', function() {

    var text = document.getElementById('objfilesname');
    var str = "Список файлов: ";
    for (var i = 0; i < this.files.length; i++) {
        str += this.files[i].name;
        str += " | ";
    }
    text.innerHTML = str;
    var clip = document.getElementById('objfilesclip');
    if(this.files.length >0){
      clip.classList.add("text-success");
    }else{
      clip.classList.remove("text-success");
      text.innerHTML = "";
    }
});

$('input[name="objtypehead"]').change(function(){
  if($('#objtypehead3').prop("checked")){
    $('#objtypehead3block').html(''+
    '<div class="form-group my-2 ml-3">'+
      '<label for="objtypehead3dr">Напишите другой тип кровли:</label>'+
      '<textarea class="form-control" name="objtypehead3dr" id="objtypehead3dr" placeholder="Пример: Другой тип кровли..." rows="1"></textarea>'+
      '<div class="invalid-feedback">'+
      '  Пожалуйста, укажите желаемую модель электрической плиты.'+
      '</div>'+
    '</div>'+
    '');
  }else{
    $('#objtypehead3block').html('');
  }
});

$('#fplace5').change(function(){
  if(this.checked){
    $('#fplace5block').html(''+
    '<div class="form-group ml-2">'+
      '<label for="fplace5dr">Укажите другое:</label>'+
      '<input class="form-control" type="text" name="fplace5dr" id="fplace5dr" placeholder="Пример: Другое">'+
      '<div class="invalid-feedback">'+
        'Пожалуйста, укажите другое.'+
      '</div>'+
    '</div>'+
    '');
  }else{
    $('#fplace5block').html('');
  }
});

$('#fhomepet').change(function(){
  if(this.checked){
    $('#fhomepetblock').html(''+
    '<div class="form-group my-2 ml-2">'+
      '<label for="fmemberhomepet">Количество питомцев:</label>'+
      '<input class="form-control" type="number" name="fmemberhomepet" id="fmemberhomepet" value="2" step="1" min="1">'+
      '<div class="invalid-feedback">'+
      '  Пожалуйста, укажите количество домашних питомцев.'+
      '</div>'+
    '</div>'+
    '<div class="form-group my-2 ml-2">'+
      '<label for="ftypehomepet">Укажите какие домашние питомцы:</label>'+
      '<textarea class="form-control not-validate" name="ftypehomepet" id="ftypehomepet" placeholder="Пример: Два кота породы девонрекс и щенок породы лабародор." rows="2"></textarea>'+
      '<div class="invalid-feedback">'+
      '  Пожалуйста, укажите какие домашние питомцы.'+
      '</div>'+
    '</div>'+
    '');
  }else{
    $('#fhomepetblock').html('');
  }
});

$('#fstreetpet').change(function(){
  if(this.checked){
    $('#fstreetpetblock').html(''+
    '<div class="form-group my-2 ml-2">'+
      '<label for="fmemberstreetpet">Количество уличных питомцев:</label>'+
      '<input class="form-control" type="number" name="fmemberstreetpet" id="fmemberstreetpet" value="1" step="1" min="1">'+
      '<div class="invalid-feedback">'+
      '  Пожалуйста, укажите количество уличных питомцев.'+
      '</div>'+
    '</div>'+
    '<div class="form-group my-2 ml-2">'+
      '<label for="ftypestreetpet">Укажите какие уличные питомцы:</label>'+
      '<textarea class="form-control not-validate" name="ftypestreetpet" id="ftypestreetpet" placeholder="Пример: Московская сторожевая собака." rows="2"></textarea>'+
      '<div class="invalid-feedback">'+
      '  Пожалуйста, укажите какие уличные питомцы.'+
      '</div>'+
    '</div>'+
    '');
  }else{
    $('#fstreetpetblock').html('');
  }
});

$('#ffamily').change(function(){
  if(this.checked){
    $('#ffamilyblock').html(''+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Постоянное проживание" name="ffamilyconst" id="ffamilyconst">'+
      '<label class="form-check-label" for="ffamilyconst">Постоянное проживание</label>'+
    '</div>'+
    '<div class="form-group my-2 ml-2">'+
      '<label for="fmemberfamily">Количество родственников:</label>'+
      '<input class="form-control" type="number" name="fmemberfamily" id="fmemberfamily" value="1" step="1" min="1">'+
      '<div class="invalid-feedback">'+
      '  Пожалуйста, укажите количество проживающих родственников.'+
      '</div>'+
    '</div>'+
    '');
  }else{
    $('#ffamilyblock').html('');
  }
});

$('#fupr').change(function(){
  if(this.checked){
    $('#fuprblock').html(''+
    '<div class="form-group my-2 ml-2">'+
      '<label for="fuprdom">Количество стационарных домофонов:</label>'+
      '<input class="form-control" type="number" name="fuprdom" id="fuprdom" value="1" step="1" min="1">'+
      '<div class="invalid-feedback">'+
      '  Пожалуйста, укажите количество стационарных домофонов.'+
      '</div>'+
    '</div>'+
    '');
  }else{
    $('#fuprblock').html('');
  }
});

$('#hallsystemforshoes').change(function(){
  if(this.checked){
    $('#hallblockforsystemshoes').html(''+
    '<div class="form-group my-2 ml-2">'+
      '<label for="hallshoes">Укажите примерное колличество пар обуви на проживающую семью:</label>'+
      '<input class="form-control" type="number" name="hallshoes" id="hallshoes" placeholder="Пар обуви" step="1" min="1">'+
      '<div class="invalid-feedback">'+
      '  Пожалуйста, укажите колличество пар обуви для членов семьи.'+
      '</div>'+
    '</div>'+
    '');
  }else{
    $('#hallblockforsystemshoes').html('');
  }
});



var hallcheckelements = document.getElementsByClassName('hallcheck');
var hallcheckcounter = 0;
$(hallcheckelements).change(function(){

  if(this.checked){
    if(hallcheckcounter < 1){
      $('#hallblockforcomments').html(''+
      '<div class="form-group my-2 ml-2">'+
        '<label for="hallcomments">Для дополнительных комментариев:</label>'+
        '<textarea class="form-control not-validate" name="hallcomments" id="hallcomments" placeholder="Дополнительные комментарии..." rows="3"></textarea>'+
      '</div>'+
      '');
    }
    hallcheckcounter++;
  }else{
    hallcheckcounter--;
    if(hallcheckcounter == 0){
      $('#hallblockforcomments').html('');
    }


  }

});

$('#kbyustorage').change(function(){
  if(this.checked){
    $('#kbyustorageblock').html(''+
    '<div class="form-group my-2 ml-2">'+
      '<label for="kbyustoragedop">Дополнительный комментарий:</label>'+
      '<textarea class="form-control not-validate" name="kbyustoragedop" id="kbyustoragedop" placeholder="Пример: Закупкой продуктов занимается персонал, мясо разделывается и храниться в специально отведённом месте..." rows="2"></textarea>'+
    '</div>'+
    '');
  }else{
    $('#kbyustorageblock').html('');
  }
});

$('#kwinterstocks').change(function(){
  if(this.checked){
    $('#kwinterstocksblock').html(''+
    '<div class="form-group my-2 ml-2">'+
      '<label for="kwinterstocksdop">Дополнительный комментарий:</label>'+
      '<textarea class="form-control not-validate" name="kwinterstocksdop" id="kwinterstocksdop" placeholder="Пример: Да будет помещение для хранения, но вынесено из дома в отдельный погреб..." rows="2"></textarea>'+
    '</div>'+
    '');
  }else{
    $('#kwinterstocksblock').html('');
  }
});

$('input[name="kplita"]').change(function(){
  if($('#kplitael').prop("checked")){
    $('#kplitablock').html(''+
    '<div class="form-group my-2 ml-3">'+
      '<label for="kmodelelplita">Напишите модель электрической плиты:</label>'+
      '<textarea class="form-control not-validate" name="kmodelelplita" id="kmodelelplita" placeholder="Пример: Модель или габариты (60 или 80 )..." rows="1"></textarea>'+
      '<div class="invalid-feedback">'+
      '  Пожалуйста, укажите желаемую модель электрической плиты.'+
      '</div>'+
    '</div>'+
    '<div class="form-check my-2 ml-3">'+
      '<input class="form-check-input" type="checkbox" value="+Духовка" name="koven" id="koven">'+
      '<label class="form-check-label" for="koven">Духовка</label>'+
    '</div>'+
    '');
  }else{
    $('#kplitablock').html('');
  }
});

$('#kvityzhki').change(function(){
  if(this.checked){
    $('#kvityzhkiblock').html(''+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Вытяжка с плиты" name="kvityzhkaplita" id="kvityzhkaplita">'+
      '<label class="form-check-label" for="kvityzhkaplita">Вытяжка с плиты</label>'+
    '</div>'+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Вытяжка с острова" name="kvityzhkaisl" id="kvityzhkaisl">'+
      '<label class="form-check-label" for="kvityzhkaisl">Вытяжка с острова</label>'+
    '</div>'+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Вытяжка с помещения" name="kvityzhkapom" id="kvityzhkapom">'+
      '<label class="form-check-label" for="kvityzhkapom">Вытяжка с помещения</label>'+
    '</div>'+
    '');
  }else{
    $('#kvityzhkiblock').html('');
  }
});

$('#kostrov').change(function(){
  if(this.checked){
    $('#kostrovblock').html(''+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Плита" name="kostrovplits" id="kostrovplits">'+
      '<label class="form-check-label" for="kostrovplits">Плита (электро или газовая)</label>'+
    '</div>'+
    '<div id="kostrovplitsblock"></div>'+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Мойка" name="kostrovwash" id="kostrovwash">'+
      '<label class="form-check-label" for="kostrovwash">Мойка</label>'+
    '</div>'+
    '');

    $('#kostrovplits').change(function(){
      if(this.checked){
        $('#kostrovplitsblock').html(''+
        '<div class="form-group my-2 ml-3">'+
          '<div class="form-check">'+
            '<input class="form-check-input" type="radio" name="kostrovplita" id="kostrovplitagaz" value="Газовая" checked>'+
            '<label class="form-check-label" for="kplitagaz">Газовая</label>'+
          '</div>'+
          '<div class="form-check">'+
            '<input class="form-check-input" type="radio" name="kostrovplita" id="kostrovplitael" value="Электрическая">'+
            '<label class="form-check-label" for="kostrovplitael">Электроплита</label>'+
          '</div>'+
        '</div>'+
        '');
      }else{
        $('#kostrovplitsblock').html('');
      }
    });
  }else{
    $('#kostrovblock').html('');
  }
});



$('#klightzone').change(function(){
  if(this.checked){
    $('#klightzoneblock').html(''+
    '<div class="form-group my-2 ml-2">'+
      '<label for="klightzonedop">Дополнительный комментарий:</label>'+
      '<textarea class="form-control not-validate" name="klightzonedop" id="klightzonedop" placeholder="Пример: Внутри шкафчиков, подсветка острова, Столешницы, Нижнего бортика..." rows="2"></textarea>'+
    '</div>'+
    '');
  }else{
    $('#klightzoneblock').html('');
  }
});

$('#hbrrazmerkrovati').change(function(){
  if(this.value == "Другой"){
    $('#hbrrazmerkrovatidrblock').show();
    var el = document.getElementById('hbrrazmerkrovatidr')
    el.classList.remove("not-validate");
  }else{
    $('#hbrrazmerkrovatidrblock').hide();
    var el = document.getElementById('hbrrazmerkrovatidr')
    el.classList.add("not-validate");
  }
});

$('#hbrspecmachine').change(function(){
  if(this.checked){
    $('#hbrspecmachineblock').html(''+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Холодильник" name="hbrspecmachine1" id="hbrspecmachine1">'+
      '<label class="form-check-label" for="hbrspecmachine1">Холодильник</label>'+
    '</div>'+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Кофемашина" name="hbrspecmachine2" id="hbrspecmachine2">'+
      '<label class="form-check-label" for="hbrspecmachine2">Кофемашина</label>'+
    '</div>'+
    '');
  }else{
    $('#hbrspecmachineblock').html('');
  }
});

$('#hbrsu').change(function(){
  if(this.checked){
    $('#hbrsublock').html(''+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Душ" name="hbrdush" id="hbrdush">'+
      '<label class="form-check-label" for="hbrdush">Душ</label>'+
    '</div>'+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Ванна" name="hbrvanna" id="hbrvanna">'+
      '<label class="form-check-label" for="hbrvanna">Ванна</label>'+
    '</div>'+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Раковина" name="hbrrakovina" id="hbrrakovina">'+
      '<label class="form-check-label" for="hbrrakovina">Раковина</label>'+
    '</div>'+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Туалет" name="hbrwc" id="hbrwc">'+
      '<label class="form-check-label" for="hbrwc">Туалет</label>'+
    '</div>'+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Наличие умного туалета или крышки" name="hbrsmartwc" id="hbrsmartwc">'+
      '<label class="form-check-label" for="hbrsmartwc">Наличие умного туалета или крышки</label>'+
    '</div>'+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Наличие гигиенического душа в су" name="hbrgigiendush" id="hbrgigiendush">'+
      '<label class="form-check-label" for="hbrgigiendush">Наличие гигиенического душа в с.у.</label>'+
    '</div>'+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Наличие радио или музыки в с.у." name="hbrsugigiendush" id="hbrsugigiendush">'+
      '<label class="form-check-label" for="hbrsugigiendush">Наличие радио или музыки в с.у.</label>'+
    '</div>'+
    '<div class="form-check my-2 ml-2">'+
      '<input class="form-check-input" type="checkbox" value="Другое" name="hbrsudr" id="hbrsudr">'+
      '<label class="form-check-label" for="hbrsudr">Другое</label>'+
    '</div>'+
    '<div id="hbrsudrblock"></div>'+
    '');

    $('#hbrsudr').change(function(){
      if(this.checked){
        $('#hbrsudrblock').html(''+
        '<div class="form-group my-2 ml-3">'+
          '<label for="hbrsudrtext">Дополнительно для другого:</label>'+
          '<textarea class="form-control" name="hbrsudrtext" id="hbrsudrtext" placeholder="Пример: Дополнительный санузел для инвалида..." rows="2"></textarea>'+
          '<div class="invalid-feedback">'+
          '  Пожалуйста, укажите желаемые примерные размеры, что правильно формировать проект.'+
          '</div>'+
        '</div>'+
        '');
      }else{
        $('#hbrsudrblock').html('');
      }
    });

  }else{
    $('#hbrsublock').html('');
  }
});

$('#hbrtv').change(function(){
  if(this.checked){
    $('#hbrtvblock').html(''+
    '<div class="form-group my-2 ml-2">'+
      '<label for="hbrtvrazmer">Укажите размер телевизора:</label>'+
      '<textarea class="form-control" name="hbrtvrazmer" id="hbrtvrazmer" placeholder="Пример: ТВ такого размера..." rows="1"></textarea>'+
      '<div class="invalid-feedback">'+
      '  Пожалуйста, укажите размеры ТВ, что правильно распределить пространство.'+
      '</div>'+
    '</div>'+
    '');
  }else{
    $('#hbrtvblock').html('');
  }
});

$('#drkamin').change(function(){
  if(this.checked){
    $('#drkaminblock').html(''+
    '<div class="form-group my-2 ml-2">'+
      '<div class="form-check">'+
        '<input class="form-check-input" type="radio" name="drkamintype" id="drkamintype1" value="Газовый  камин" checked>'+
        '<label class="form-check-label" for="drkamintype1">Газовый</label>'+
      '</div>'+
      '<div class="form-check">'+
        '<input class="form-check-input" type="radio" name="drkamintype" id="drkamintype2" value="Электро  камин">'+
        '<label class="form-check-label" for="drkamintype2">Электро</label>'+
      '</div>'+
      '<div class="form-check">'+
        '<input class="form-check-input" type="radio" name="drkamintype" id="drkamintype3" value="Искусственный  камин">'+
        '<label class="form-check-label" for="drkamintype3">Искусственный</label>'+
      '</div>'+
      '<div class="form-check">'+
        '<input class="form-check-input" type="radio" name="drkamintype" id="drkamintype4" value="Дровяной  камин">'+
        '<label class="form-check-label" for="drkamintype4">Дровяной</label>'+
      '</div>'+
      '<div class="form-check">'+
        '<input class="form-check-input" type="radio" name="drkamintype" id="drkamintype5" value="Спиртовой  камин">'+
        '<label class="form-check-label" for="drkamintype5">Спиртовой</label>'+
      '</div>'+
      '<div class="form-check">'+
        '<input class="form-check-input" type="radio" name="drkamintype" id="drkamintype6" value="ЖК  камин">'+
        '<label class="form-check-label" for="drkamintype6">ЖК</label>'+
      '</div>'+
    '</div>'+
    '');
  }else{
    $('#drkaminblock').html('');
  }
});

$('#drspa').change(function(){
  if(this.checked){
    $('#drspablock').html(''+
    '<div class="form-group my-2 ml-2">'+
      '<div class="form-check">'+
        '<input class="form-check-input" type="radio" name="drspatype" id="drspatype1" value="Баня" checked>'+
        '<label class="form-check-label" for="drspatype1">Баня</label>'+
      '</div>'+
      '<div class="form-check">'+
        '<input class="form-check-input" type="radio" name="drspatype" id="drspatype2" value="Сауна">'+
        '<label class="form-check-label" for="drspatype2">Сауна</label>'+
      '</div>'+
    '</div>'+
    '');
  }else{
    $('#drspablock').html('');
  }
});


// Замените на свой API-ключ
var token = "67fd1083a94980b339851baf73f373e31510c813";

$("#email").suggestions({
    token: token,
    type: "EMAIL",
    /* Вызывается, когда пользователь выбирает одну из подсказок */
    onSelect: function(suggestion) {
        console.log(suggestion);
    }
});
//
// $("#firstname").suggestions({
//     token: token,
//     type: "NAME",
//     /* Вызывается, когда пользователь выбирает одну из подсказок */
//     onSelect: function(suggestion) {
//         console.log(suggestion);
//     }
// });

// Инициализирует подсказки по ФИО на указанном элементе
function init($surname, $name, $patronymic) {
  var self = {};
  self.$surname = $surname;
  self.$name = $name;
  var fioParts = ["SURNAME", "NAME"];
  $.each([$surname, $name], function(index, $el) {
    var sgt = $el.suggestions({
      token: token,
      type: "NAME",
      triggerSelectOnSpace: false,
      hint: "",
      noCache: true,
      params: {
        // каждому полю --- соответствующая подсказка
        parts: [fioParts[index]]
      }
    });
  });
};




init($("#lastname"), $("#firstname"));


});




var inoe = 1;

function addInoe(){
  if(inoe < 10){
    var inoeblock = document.getElementById("inoeblock"+inoe);
    var str = '<div class="form-group my-2">'+
      '<label for="inoe'+inoe+'">Иное пожелание №'+inoe+':</label>'+
      '<textarea class="form-control not-validate" name="inoe'+inoe+'" id="inoe'+inoe+'" placeholder="Пример: Ещё..." rows="2"></textarea>'+
      '<div class="invalid-feedback">'+
        'Пожалуйста, заполните это поле для правильного формирования проекта.'+
      '</div>'+
    '</div>'+
    '<div id="inoeblock'+(inoe+1)+'"></div>'
    inoeblock.innerHTML = str;
    inoe++;
    $('#inoeclose').show();
  }else{
    alert('Больше не получается добавить, приносим свои извинения');
  }
}

function closeInoe(){
  if(inoe > 0){
    inoe--;
    var inoeblock = document.getElementById("inoeblock"+(inoe));
    inoeblock.innerHTML = '';
  }else{
    alert('Полей для удаление больше нет');
  }
  if(inoe == 1 ){
    $('#inoeclose').hide();
  }
}

var dop = 1;

function addDop(){
  if(dop < 10){
    var dopblock = document.getElementById("dopblock"+dop);
    var str = '<div class="form-group my-2">'+
      '<label for="dop'+dop+'">Дополнение №'+dop+':</label>'+
      '<textarea class="form-control not-validate" name="dop'+dop+'" id="dop'+dop+'" placeholder="Пример: Ещё..." rows="2"></textarea>'+
      '<div class="invalid-feedback">'+
        'Пожалуйста, заполните это поле для правильного формирования проекта.'+
      '</div>'+
    '</div>'+
    '<div id="dopblock'+(dop+1)+'"></div>';
    dopblock.innerHTML = str;
    dop++;
    $('#dopclose').show();
  }else{
    alert('Больше не получается добавить, приносим свои извинения')
  }
}

function closeDop(){
  if(dop > 0){
    dop--;
    var dopblock = document.getElementById("dopblock"+(dop));
    dopblock.innerHTML = '';
  }else{
    alert('Полей для удаление больше нет');
  }
  if(dop == 1 ){
    $('#dopclose').hide();
  }
}

var bcount = 0;
function addGarderob(){
  var beds = $('#objbedrooms').val();
  if((beds >= 1)&&(bcount<1)){
    var countgar = beds*1 + 4;
    $('.bedrooms').show();
    document.getElementById('button-addonG').innerHTML = 'Изменить';
    $('#objbedrooms').prop( "readonly", true );
    document.getElementById('objgartext').innerHTML = 'Укажите количество гардеробов до '+(countgar)+'';
    bcount++;
  }else{
    $('.bedrooms').hide();
    $('#objgar').value = '';
    $('#objbedrooms').prop( "readonly", false );
    document.getElementById('button-addonG').innerHTML = 'Добавить гардеробы';
    document.getElementById('objgartext').innerHTML = '';
    bcount--;
  }
  if((beds < 1)&&(bcount<1)){
    alert('Пожалуйста для добавления гардеробов укажите пожалуйста сначала количество спален');
  }
}

var gcount = 0;
function checkGarderob(){
  var beds = $('#objbedrooms').val();
  var gar = $('#objgar').val();

  if((gar > beds*1+4)&&(gcount<1)){
    var response = confirm('Вы указали всего '+beds+'  спальни Вы уверенны с количеством мест для хранения одежды ?');
    if(response){
      $('#objgar').prop( "readonly", true );
      innerGar(gar);
      document.getElementById('button-checkG').innerHTML = 'Изменить';
      gcount++;
    }
  }else if((gar <= beds*1+4)&&(gar > 0)&&(gcount<1)){
    $('#objgar').prop( "readonly", true );
    innerGar(gar);
    document.getElementById('button-checkG').innerHTML = 'Изменить';
    gcount++;
  }else if(gcount >0){
    $('#objgar').prop( "readonly", false );
    $('#objgar').value = '';
    var garblock = document.getElementById("garblock0");
    garblock.innerHTML = '';
    document.getElementById('button-checkG').innerHTML = 'Сохранить';
    gcount--;
  }

  if((gar < 1)&&(gcount<1)){
    alert('Пожалуйста для сохранения количества гардеробов укажите их');
  }
}

function innerGar(gar){
  for (i = 0; i < gar; i++) {
    var garblock = document.getElementById("garblock"+i);
    var str = '<div class="form-group my-2">'+
      '<label for="gar'+(i+1)+'">Гардеробная '+ (i+1) +':</label>'+
      '<textarea class="form-control not-validate" name="gar'+(i+1)+'" id="gar'+(i+1)+'" placeholder="Опишите, что будет находиться в этой гардеробной..." rows="2"></textarea>'+
      '<div class="invalid-feedback">'+
        'Пожалуйста, заполните это поле для правильного формирования проекта.'+
      '</div>'+
    '</div>'+
    '<div id="garblock'+(i+1)+'"></div>';
    garblock.innerHTML = str;
  }

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

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Отправить";
  } else {
    document.getElementById("nextBtn").innerHTML = "Дальше";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;

  if(n == 1 && validateForm()){
    if($('#objsq').val() >= 250){
      $('.sq').show();
    }
  }
  var check = true;
  if(currentTab == 5 && validateForm()){
    if(checkSpec()){
    }else{
      check = false;
    }
  }
  // if you have reached the end of the form... :
  if (currentTab >= x.length-1) {
    //...the form gets submitted:
    if(n != '-1'){
      document.getElementById("questionForm").submit();
      return false;
    }
  }
  if(check){
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
  }else{
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + 2;
  }


  // Otherwise, display the correct tab:
  showTab(currentTab);
  var target = $('#headerForm');
  $('html, body').stop().animate({
      'scrollTop': target.offset().top
  }, 500);
}

function checkSpec(){
  var check = 0;
  if (($('#objchild').prop('checked'))||($('#objwishchild').prop('checked'))||($('#objbaby').prop('checked'))) {
    $('#sbrwishesblock').show(300);
    check++;
  }

  if ($('#objinvalid').prop('checked')) {
    $('#sbrcreplforwcblock').show(300);
    $('#sbrelevatorforcatalocblock').show(300);
    $('#sbrsystemupblock').show(300);
    $('#sbrdrugoeblock').show(300);
    check++;
  }
  if(check > 0){
    return true;
  }else{
    $('#sbralert').show(300);
    return false;
  }

}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, t, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  t = x[currentTab].getElementsByTagName("textarea");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if ((y[i].value == "")&&(y[i].type != 'file')&&(!y[i].classList.contains('not-validate'))) {
      // add an "invalid" class to the field:
      if(y[i].type != 'file'){
        y[i].classList.add("is-invalid");
      }
      // and set the current valid status to false:
      valid = false;
    }else if ((y[i].value != "")&&(y[i].type != 'file')&&(!y[i].classList.contains('not-validate'))) {
      // add an "invalid" class to the field:
      if(y[i].type != 'file'){
        y[i].classList.remove("is-invalid");
        y[i].classList.add("is-valid");
      }
    }
  }

  for (j = 0; j < t.length; j++) {
    // If a field is empty...
    if ((t[j].value == "")&&(!t[j].classList.contains('not-validate'))) {
      // add an "invalid" class to the field:
      t[j].classList.add("is-invalid");
      // and set the current valid status to false:
      valid = false;
    }else if(t[j].value != ""){
      // add an "invalid" class to the field:
      t[j].classList.remove("is-invalid");
      t[j].classList.add("is-valid");

    }
  }
  // If the valid status is true, mark the step as finished and valid:
  // if (valid) {
  //   document.getElementsByClassName("step")[currentTab].className += " finish";
  // }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var stepsblock = document.getElementById("xs-steps");

  if(window.getComputedStyle(stepsblock).display == 'none'){
    var i, x = document.getElementsByClassName("step");
  }else{
    var i, x = document.getElementsByClassName("xs-step");
  }

  for (i = 0; i < x.length; i++) {
    x[i].innerHTML = '';
  }
  for (i = 0; i < n; i++) {
    x[i].innerHTML = '<i class="fas fa-check text-light"></i>';
  }
  // //... and adds the "active" class to the current step:
  x[n].innerHTML = '<i class="fas fa-dot-circle text-light"></i>';
}
