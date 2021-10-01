@extends('layouts.app')

@section('title')BDO Disigner - Добро пожаловать | Онлайн-опросник@endsection
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/css/suggestions.min.css" rel="stylesheet" />
<style media="screen">
/* Hide all steps by default: */
.tab {
  display: none;
}

input[type="file"] {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}

textarea {
  resize: none; /* Запрещаем изменять размер */
 }

 label{
   font-weight: 500;
   font-size: 1rem;
   color: #0e0e0e;
 }
</style>
@endsection
@section('content')
<div class="container mt-5">
  @isset($response)
      <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
          <p><strong>{{$response}}</strong></p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
  @endisset
<div class="row">
  <h1 class="title m-3" id="headerForm">Онлайн опросник:</h1>
  <div class="col-12 col-sm-10 shadow mb-5 bg-white rounded">
    <form method="POST" class="p-2" id="questionForm" action="{{ route('makeoprosnik')}}" enctype="multipart/form-data">
      @csrf
      <div class="tab">
        <h2 class="border-left border-lg border-dark pl-2 mb-3">Об объекте</h2>

        <div class="form-row my-2">
          <div class="col">
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Имя">
          </div>
          <div class="col">
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Фамилия">
          </div>
        </div>

        <div class="form-row my-2">
          <div class="col">
            <input type="tel" class="form-control" name="phone" id="tel" placeholder="Телефон">
          </div>
          <div class="col">
            <input type="email" class="form-control" name="email" id="email" placeholder="email">
          </div>
        </div>
        <hr>

        <div class="form-group">
          <label for="objsq">Примерная площадь:</label>
          <div class="input-group">
            <input class="form-control" type="number" name="objsq" id="objsq" placeholder="Площадь" step="5" min="50">
            <div class="input-group-append">
              <span class="input-group-text" id="objsqm">м<sup>2</sup></span>
            </div>
            <div class="invalid-feedback">
              Пожалуйста, укажите желаемую площадь объекта от 50 <span>м<sup>2</sup></span>.
            </div>
          </div>
        </div>

        <div class="form-group my-2">
          <label for="objdesc">Коротко о будущем объекте:</label>
          <textarea class="form-control not-validate" name="objdesc" id="objdesc" placeholder="Пример: Данный дом(или квартира) будет выполнен из принципа 21 века технологий, в нем должно быть все максимально технологично. Авто открытие окон и дверей, управление светом через голосовой помощник и.т.п." rows="2"></textarea>
          <div class="invalid-feedback">
            Пожалуйста, заполните поле с кратким описанием, ведь это поможет с формированием проекта.
          </div>
        </div>

        <div class="form-group my-2">
          <label for="objflat">Желаемое количество этажей:</label>
          <input class="form-control" type="number" name="objflat" id="objflat" placeholder="Этажи" step="1" min="1" max="5">
          <div class="invalid-feedback">
            Пожалуйста, укажите желаемое количество этажей от 1 до 5.
          </div>
        </div>

        <div class="form-group my-2">
          <label for="objbedrooms">Желаемое количество спален:</label>
          <div class="input-group">
            <input class="form-control" type="number" name="objbedrooms" id="objbedrooms" placeholder="Спальни" step="1" min="1" aria-describedby="button-addonG">
            <div class="invalid-feedback">
              Пожалуйста, укажите желаемое колличество спален от 1.
            </div>
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="button-addonG" onclick="addGarderob()">Добавить гардеробы</button>
            </div>
          </div>
        </div>

        <div class="form-group bedrooms" style="display: none;">
          <label for="objgar">Желаемое количество гардеробов:</label>
          <div class="input-group">
            <input class="form-control not-validate" type="number" name="objgar" id="objgar" placeholder="Гардеробы" step="1" min="1" aria-describedby="button-checkG">
            <div class="invalid-feedback">
              Пожалуйста, укажите желаемое колличество гардеробов от 1.
            </div>
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="button-checkG" onclick="checkGarderob()">Сохранить</button>
            </div>
          </div>
          <p class="small" id="objgartext"></p>
        </div>

        <div class="form-group">
          <label for="objwc">Желаемое количество санузлов:</label>
          <input class="form-control" type="number" name="objwc" id="objwc" placeholder="Санузлы" step="1" min="1" max="5">
          <div class="invalid-feedback">
            Пожалуйста, укажите желаемое количество санузлов от 1 до 5.
          </div>
        </div>

        <div class="form-group">
          <label for="objkitchens">Желаемое количество кухонь:</label>
          <input class="form-control" type="number" name="objkitchens" id="objkitchens" placeholder="Кухни" step="1" min="1" max="5">
          <div class="invalid-feedback">
            Пожалуйста, укажите желаемое колличество кухонь от 1 до 5.
          </div>
        </div>

        <div class="form-group">
          <label for="objwishfromclient">Ваши доп. пожелания:</label>
          <textarea class="form-control not-validate" name="objwishfromclient" id="objwishfromclient" placeholder="Пример: Хочу чтобы был второй свет..." rows="2"></textarea>
          <div class="invalid-feedback">
            Пожалуйста, заполните поле с Вашими пожеланиями, ведь это поможет с формированием проекта.
          </div>
        </div>

        <div class="form-group">
          <label for="objstyles">Любимые стили:</label>
          <textarea class="form-control not-validate" name="objstyles" id="objstyles" placeholder="Пример: Борокко, Хайтек..." rows="2"></textarea>
          <div class="invalid-feedback">Пожалуйста, заполните поле с любимыми стилями, ведь это поможет с формированием проекта.</div>
          <div class="text-right my-2 ">
            <p class="small">Вы можете прикрепить фото понравившихся стилей</p>
            <label class="custom-file-upload" data-toggle="tooltip" data-placement="left" title="Прикрепите фото/картинки, если есть">
                <input type="file" name="objfiles[]" multiple/>
                <i class="fas fa-paperclip" id="objfilesclip"></i>
            </label>
            <p class="small" id="objfilesname"></p>
          </div>
        </div>


        <div class="form-group">
          <label for="objcars">Количество автомобилей:</label>
          <input class="form-control" type="number" name="objcars" id="objcars" placeholder="Автомобили" step="1" min="1" max="5">
          <div class="invalid-feedback">
            Пожалуйста, укажите желаемое количество автомобилей от 1 до 5.
          </div>
        </div>

        <div class="form-group">
          <label for="objresidents">Кто будет жить:</label>
          <textarea class="form-control not-validate" name="objresidents" id="objresidents" placeholder="Пример: Муж, супруга, один ребенок (дочь) и родители со стороны жены в возрасте 68 лет..." rows="2"></textarea>
          <div class="invalid-feedback">Пожалуйста, заполните поле с жильцами, ведь это поможет с формированием проекта.</div>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="objchild" id="objchild">
          <label class="form-check-label" for="objchild">Наличие детей</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="objwishchild" id="objwishchild">
          <label class="form-check-label" for="objwishchild">Ожидание детей</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="objbaby" id="objbaby">
          <label class="form-check-label" for="objbaby">Наличие грудничков</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="objinvalid" id="objinvalid">
          <label class="form-check-label" for="objinvalid">Наличие члена семьи с особым обращением</label>
        </div>

        <div class="form-group my-2">
          <label>Вид кровли:</label>
          <br>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="objtypehead" id="objtypehead1" value="Прямая (Эксплуатируемая)" checked>
            <label class="form-check-label" for="objtypehead1">Прямая (Эксплуатируемая)</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="objtypehead" id="objtypehead2" value="Скатная">
            <label class="form-check-label" for="objtypehead2">Скатная</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="objtypehead" id="objtypehead3" value="Другое">
            <label class="form-check-label" for="objtypehead3">Другое</label>
          </div>
        </div>
        <div id="objtypehead3block">

        </div>

      </div>

      <div class="tab">
        <h2 class="border-left border-lg border-dark pl-2 mb-3">Дополнительные комнаты</h2>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="drkamin" id="drkamin">
          <label class="form-check-label" for="drkamin">Каминная зона</label>
        </div>
        <div id="drkaminblock"></div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="drmusinstr" id="drmusinstr">
          <label class="form-check-label" for="drmusinstr">Наличие музыкального инструмента</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="drbar" id="drbar">
          <label class="form-check-label" for="drbar">Наличие бара</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="drspa" id="drspa">
          <label class="form-check-label" for="drspa">Наличие СПА зон</label>
        </div>
        <div id="drspablock"></div>

        <div class="form-check my-2 sq" style="display: none;">
          <input class="form-check-input" type="checkbox" value="Да" name="drmassage" id="drmassage">
          <label class="form-check-label" for="drmassage">Наличие комнат для массажа</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="drstorageroom" id="drstorageroom">
          <label class="form-check-label" for="drstorageroom">Наличие комнат для хранения</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="drguesthall" id="drguesthall">
          <label class="form-check-label" for="drguesthall">Наличие отдельных зон для приема гостей</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="drlibrary" id="drlibrary">
          <label class="form-check-label" for="drlibrary">Наличие библиотеки</label>
        </div>

        <div class="form-check my-2 sq" style="display: none;">
          <input class="form-check-input" type="checkbox" value="Да" name="drkino" id="drkino">
          <label class="form-check-label" for="drkino">Наличие кинотеатра</label>
        </div>

        <div class="form-check my-2 sq" style="display: none;">
          <input class="form-check-input" type="checkbox" value="Да" name="drswpool" id="drswpool">
          <label class="form-check-label" for="drswpool">Бассейн</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="drtehdry" id="drtehdry">
          <label class="form-check-label" for="drtehdry">Комната тех. мойки (в котельной)</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="drmaster" id="drmaster">
          <label class="form-check-label" for="drmaster">Мастерская</label>
        </div>

        <div class="form-check my-2 sq" style="display: none;">
          <input class="form-check-input" type="checkbox" value="Да" name="drpersonal" id="drpersonal">
          <label class="form-check-label" for="drpersonal">Комнаты для персонала (нянь)</label>
        </div>

        <div class="form-check my-2 sq" style="display: none;">
          <input class="form-check-input" type="checkbox" value="Да" name="drgym" id="drgym">
          <label class="form-check-label" for="drgym">Спортзал-Тренажерный зал</label>
        </div>

        <div class="form-check my-2 sq" style="display: none;">
          <input class="form-check-input" type="checkbox" value="Да" name="drplayr" id="drplayr">
          <label class="form-check-label" for="drplayr">Детская-Игровая</label>
        </div>

        <div class="form-check my-2 sq" style="display: none;">
          <input class="form-check-input" type="checkbox" value="Да" name="drbilyard" id="drbilyard">
          <label class="form-check-label" for="drbilyard">Бильярдная</label>
        </div>

        <div class="form-group my-2" id="drwishesblock" style="display: none;">
          <label for="sbrwishes">Пожелания к личным пространствам (кабинет, комната для косметики):</label>
          <textarea class="form-control not-validate" name="drwishes" id="drwishes" placeholder="Пример: Ещё..." rows="2"></textarea>
          <div class="invalid-feedback">
            Пожалуйста, заполните это поле для правильного формирования проекта.
          </div>
        </div>

        <div class="text-right my-2">
          <p class="small" id="drwishesblocktext">Добавьте пожелания к личным пространствам (кабинет, комната для косметики)</p>
          <label class="custom-file-upload" data-toggle="tooltip" data-placement="left" title="Добавить пожелания к личным пространствам (кабинет, комната для косметики)" onclick="showComments('drwishesblock')">
              <i class="fas fa-plus" id="drwishesblockplus"></i>
          </label>
        </div>

      </div>

      <div class="tab">
        <h2 class="border-left border-lg border-dark pl-2 mb-3">Особенности</h2>

        <div class="form-group my-2">
          <label>Преобладающая рука:</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="ftypeofhand" id="ftypeofhand1" value="Правша" checked>
            <label class="form-check-label" for="ftypeofhand1">Правша</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="ftypeofhand" id="ftypeofhand2" value="Левша">
            <label class="form-check-label" for="ftypeofhand2">Левша</label>
          </div>
        </div>

        <div class="form-group my-2">
          <label for="fbioritms">Опишите Ваш биоритм:</label>
          <textarea class="form-control not-validate" name="fbioritms" id="fbioritms" placeholder="Пример: Я просыпаюсь на пробежку в пять часов утра, муж просыпается в районе десяти утра, но поздно ложиться." rows="2"></textarea>
          <div class="invalid-feedback">Пожалуйста, заполните поле с биоритмами, ведь это поможет с формированием проекта.</div>
        </div>

        <div class="form-group my-2">
          <label>Наличие дополнительных мест:</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="fplace1" id="fplace1" value="Да">
            <label class="form-check-label" for="fplace1">Оружейный сейф</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="fplace2" id="fplace2" value="Да">
            <label class="form-check-label" for="fplace2">Место под Рыбаловные снасти</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="fplace3" id="fplace3" value="Да">
            <label class="form-check-label" for="fplace3">Система хранения часов</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="fplace4" id="fplace4" value="Да">
            <label class="form-check-label" for="fplace4">Система хранения личных вещей</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="fplace5" id="fplace5" value="Другое">
            <label class="form-check-label" for="fplace5">Другое</label>
          </div>
        </div>
        <div id="fplace5block"></div>

        <div class="form-group my-2">
          <label for="ffavcolors">Любимые цвета:</label>
          <textarea class="form-control not-validate" name="ffavcolors" id="ffavcolors" placeholder="Пример: Мои любимые цвета желтый и белый..." rows="2"></textarea>
          <div class="invalid-feedback">Пожалуйста, заполните поле с любимыми цветами, ведь это поможет с формированием проекта.</div>
        </div>

        <div class="form-group my-2">
          <label for="fallergic">Если есть аллергия, то напишите, на что:</label>
          <textarea class="form-control not-validate" name="fallergic" id="fallergic" placeholder="Пример: Аллергия на кошек..." rows="2"></textarea>
          <div class="invalid-feedback">Пожалуйста, заполните поле с аллергией, ведь это поможет уберечь Вас от неприятностей.</div>
        </div>

        <div class="form-group">
          <label for="feye">Близорукость или Дальнозоркость у большей части семьи ?</label>
          <textarea class="form-control not-validate" name="feye" id="feye" placeholder="Пример: Я и мой сын носим очки, а у супруги отличное зрение..." rows="2"></textarea>
          <div class="invalid-feedback">
            Пожалуйста, укажите приблизительно зрение членов Вашей семьи.
          </div>
        </div>

        <div class="form-group my-2">
          <label for="fhobby">Опишите пожалуйства Ваши хобби и увлечения:</label>
          <textarea class="form-control not-validate" name="fhobby" id="fhobby" placeholder="Пример: Я увлекаюсь резьбой по дереву и хотел отдельное место под мастерскую..." rows="2"></textarea>
          <div class="invalid-feedback">Пожалуйста, заполните поле с хобби, чтобы мы могли узнать друг друга.</div>
        </div>

        <div class="form-group my-2">
          <label for="flike">Кратко расскажите о том, что Вам нравится:</label>
          <textarea class="form-control not-validate" name="flike" id="flike" placeholder="Пример: Мне нравится, когда телевизор утоплен в нишу..." rows="2"></textarea>
          <div class="invalid-feedback">Пожалуйста, заполните это поле для лучшего представления Вашего вкуса.</div>
        </div>

        <div class="form-group my-2">
          <label for="fdislike">Кратко расскажите о том, что Вам не нравится:</label>
          <textarea class="form-control not-validate" name="fdislike" id="fdislike" placeholder="Пример: Мне не нравится, когда в доме слишком много света..." rows="2"></textarea>
          <div class="invalid-feedback">Пожалуйста, заполните это поле для лучшего представления Вашего вкуса.</div>
        </div>

        <div class="form-group my-2">
          <label class="mr-2">Гости: </label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="fguest" id="fguest1" value="Да" checked>
            <label class="form-check-label" for="fguest1">Да</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="fguest" id="fguest2" value="Нет">
            <label class="form-check-label" for="fguest2">Нет</label>
          </div>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="ffamily" id="ffamily">
          <label class="form-check-label" for="ffamily">Родственники</label>
        </div>
        <div id="ffamilyblock"></div>

        <div class="form-group my-2">
          <label for="fconcept">Основная концепция жилья:</label>
          <textarea class="form-control not-validate" name="fconcept" id="fconcept" placeholder="Пример: Концепция заключается в..." rows="2"></textarea>
          <div class="invalid-feedback">Пожалуйста, заполните это поле для лучшего представления о Вашем проекте.</div>
        </div>

        <div class="form-group my-2">
          <label for="ffetuaresobj">Особенности объекта:</label>
          <textarea class="form-control not-validate" name="ffetuaresobj" id="ffetuaresobj" placeholder="Пример: Особенности в..." rows="2"></textarea>
          <div class="invalid-feedback">Пожалуйста, заполните это поле для лучшего представления о Вашем проекте.</div>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="fhomepet" id="fhomepet">
          <label class="form-check-label" for="fhomepet">Домашние животные</label>
        </div>
        <div id="fhomepetblock"></div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="fstreetpet" id="fstreetpet">
          <label class="form-check-label" for="fstreetpet">Уличные животные</label>
        </div>
        <div id="fstreetpetblock"></div>

        <div class="form-group my-2">
          <label class="mr-2">Hi-Fi аппаратура или кино зал: </label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="fhifi" id="fhifi1" value="Да" checked>
            <label class="form-check-label" for="fhifi1">Да</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="fhifi" id="fhifi2" value="Нет">
            <label class="form-check-label" for="fhifi2">Нет</label>
          </div>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="finternet" id="finternet">
          <label class="form-check-label" for="finternet">Интернет</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="finternettv" id="finternettv">
          <label class="form-check-label" for="finternettv">Интернет-телевидение</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="fvideo" id="fvideo">
          <label class="form-check-label" for="fvideo">Видео наблюдение</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="fscud" id="fscud">
          <label class="form-check-label" for="fscud">Система контроля доступа (СКУД)</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="fupr" id="fupr">
          <label class="form-check-label" for="fupr">Управление калитками и воротам по средствам телефона</label>
        </div>
        <div id="fuprblock">

        </div>

      </div>

      <div class="tab">
        <h2 class="border-left border-lg border-dark pl-2 mb-3">Прихожая</h2>

        <div class="form-check my-2">
          <input class="form-check-input hallcheck" type="checkbox" value="Да" name="hallkey" id="hallkey">
          <label class="form-check-label" for="hallkey">Полка для ключей</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input hallcheck" type="checkbox" value="Да" name="hallshoes" id="hallshoes">
          <label class="form-check-label" for="hallshoes">Место для обуви</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input hallcheck" type="checkbox" value="Да" name="hallveshalka" id="hallveshalka">
          <label class="form-check-label" for="hallveshalka">Вешалка и хранение сумок</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input hallcheck" type="checkbox" value="Да" name="hallcupboard" id="hallcupboard">
          <label class="form-check-label" for="hallcupboard">Шкаф для одежды</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input hallcheck" type="checkbox" value="Да" name="hallmirrors" id="hallmirrors">
          <label class="form-check-label" for="hallmirrors">Зеркала (в рост, на двери и т. п.)</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input hallcheck" type="checkbox" value="Да" name="halldomofon" id="halldomofon">
          <label class="form-check-label" for="halldomofon">Домофония и Видео</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input hallcheck" type="checkbox" value="Да" name="hallwattercom" id="hallwattercom">
          <label class="form-check-label" for="hallwattercom">Размещение сливного трапа приходе (для удобства уборки)</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input hallcheck" type="checkbox" value="Да" name="hallhotflat" id="hallhotflat">
          <label class="form-check-label" for="hallhotflat">Теплый пол</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input hallcheck" type="checkbox" value="Да" name="hallhotflatv" id="hallhotflatv">
          <label class="form-check-label" for="hallhotflatv">Теплый пол (входной группы)</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input hallcheck" type="checkbox" value="Да" name="hallsecurity" id="hallsecurity">
          <label class="form-check-label" for="hallsecurity">Система охраны</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input hallcheck" type="checkbox" value="Да" name="hallsmarthome" id="hallsmarthome">
          <label class="form-check-label" for="hallsmarthome">Система умного дома</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input hallcheck" type="checkbox" value="Да" name="hallsystemforshoes" id="hallsystemforshoes">
          <label class="form-check-label" for="hallsystemforshoes">Система хранения обуви (сколько пар обуви для скольких членов семьи)</label>
        </div>
        <div id="hallblockforsystemshoes"></div>

        <div class="form-group my-2" id="hallwishesblock" style="display: none;">
          <label for="hallwishes">Дополнительные пожелания:</label>
          <textarea class="form-control not-validate" name="hallwishes" id="hallwishes" placeholder="Пример: Дополнительно хочу..." rows="2"></textarea>
          <div class="invalid-feedback">Пожалуйста, заполните это поле для лучшего представления о Вашем проекте.</div>
        </div>

        <div class="text-right my-2">
          <p class="small" id="hallwishesblocktext">Дополнительные пожелания</p>
          <label class="custom-file-upload" data-toggle="tooltip" data-placement="left" title="Добавить пожелания к личным пространствам (кабинет, комната для косметики)" onclick="showComments('hallwishesblock')">
              <i class="fas fa-plus" id="hallwishesblockplus"></i>
          </label>
        </div>

        <div id="hallblockforcomments"></div>

      </div>

      <div class="tab">
        <h2 class="border-left border-lg border-dark pl-2 mb-3">Кухня</h2>

        <div class="form-group my-2">
          <label for="kcooker">Кто готовит:</label>
          <textarea class="form-control not-validate" name="kcooker" id="kcooker" placeholder="Пример: Готовить будет..." rows="1"></textarea>
          <div class="invalid-feedback">
            Пожалуйста, заполните это поле для правильного проектирования кухни.
          </div>
        </div>

        <div class="form-group my-2">
          <label for="ktimeofcook">Насколько часто готовят:</label>
          <textarea class="form-control not-validate" name="ktimeofcook" id="ktimeofcook" placeholder="Пример: В день готовят по..." rows="1"></textarea>
          <div class="invalid-feedback">
            Пожалуйста, заполните это поле для правильного проектирования кухни.
          </div>
        </div>

        <div class="form-check my-2 sq" style="display: none;">
          <input class="form-check-input" type="checkbox" value="Да" name="kforsheff" id="kforsheff">
          <label class="form-check-label" for="kforsheff">Кухня для повара (наличие проффесиональной техники)</label>
        </div>

        <div class="form-check my-2 sq" style="display: none;">
          <input class="form-check-input" type="checkbox" value="Да" name="kmini" id="kmini">
          <label class="form-check-label" for="kmini">Мини кухня для хозяев, а для персонала - большая</label>
        </div>

        <div class="form-check my-2 sq" style="display: none;">
          <input class="form-check-input" type="checkbox" value="Да" name="kbyustorage" id="kbyustorage">
          <label class="form-check-label" for="kbyustorage">Закупка и хранение продуктов</label>
        </div>
        <div id="kbyustorageblock"></div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kwinterstocks" id="kwinterstocks">
          <label class="form-check-label" for="kwinterstocks">Зимние запасы и система хранения</label>
        </div>
        <div id="kwinterstocksblock"></div>

        <div class="form-group my-2">
          <label for="kfreeze">Требования к хранению мяса и заморозок:</label>
          <textarea class="form-control not-validate" name="kfreeze" id="kfreeze" placeholder="Пример: Нужен холодильник для мяса с охоты и отдельно холодильник для кошерного мяса." rows="2"></textarea>
          <div class="invalid-feedback">
            Пожалуйста, заполните это поле для правильного проектирования кухни.
          </div>
        </div>

        <div class="form-group my-2">
          <label class="mr-2">Приборы: </label>
          <div class="form-check ml-2">
            <input class="form-check-input" type="radio" name="kplita" id="kplitagaz" value="Газовые (плита, духовка) приборы" checked>
            <label class="form-check-label" for="kplitagaz">Газовые (плита, духовка)</label>
          </div>
          <div class="form-check ml-2">
            <input class="form-check-input" type="radio" name="kplita" id="kplitael" value="Электроплита">
            <label class="form-check-label" for="kplitael">Электроплита</label>
          </div>
        </div>
        <div id="kplitablock"></div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kwaveoven" id="kwaveoven">
          <label class="form-check-label" for="kwaveoven">Микроволновка</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kcofemachine" id="kcofemachine">
          <label class="form-check-label" for="kcofemachine">Кофемашинка</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="ksushkaposud" id="ksushkaposud">
          <label class="form-check-label" for="ksushkaposud">Система сушки и подогрева посуды</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kmoika" id="kmoika">
          <label class="form-check-label" for="kmoika">Мойка</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kkranmoika" id="kkranmoika">
          <label class="form-check-label" for="kkranmoika">Кран на мойке</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kwashmachine" id="kwashmachine">
          <label class="form-check-label" for="kwashmachine">Посудомоечная машина</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kfreezemachine" id="kfreezemachine">
          <label class="form-check-label" for="kfreezemachine">Холодильник</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kfreezestorage" id="kfreezestorage">
          <label class="form-check-label" for="kfreezestorage">Морозильник</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kstorageforposuda" id="kstorageforposuda">
          <label class="form-check-label" for="kstorageforposuda">Система хранения посуды</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="ktoster" id="ktoster">
          <label class="form-check-label" for="ktoster">Наличие тостера</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kblender" id="kblender">
          <label class="form-check-label" for="kblender">Наличие блэндера</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kmultivarki" id="kmultivarki">
          <label class="form-check-label" for="kmultivarki">Наличие мультиварки</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kbigtahnika" id="kbigtahnika">
          <label class="form-check-label" for="kbigtahnika">Наличие крупной техники</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kswitchtrash" id="kswitchtrash">
          <label class="form-check-label" for="kswitchtrash">Разделение мусора (Пищевые, Пластик, Стекло, Бумага)</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kstorageforvegetable" id="kstorageforvegetable">
          <label class="form-check-label" for="kstorageforvegetable">Хранение овощей</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kstorageforfruits" id="kstorageforfruits">
          <label class="form-check-label" for="kstorageforfruits">Хранение фруктов</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kvityzhki" id="kvityzhki">
          <label class="form-check-label" for="kvityzhki">Вытяжки кухни</label>
        </div>
        <div id="kvityzhkiblock"></div>

        <div class="form-group my-2">
          <label for="kmaterialtable">Материал столешницы:</label>
          <textarea class="form-control not-validate" name="kmaterialtable" id="kmaterialtable" placeholder="Пример: Материал..." rows="2"></textarea>
          <div class="invalid-feedback">
            Пожалуйста, заполните это поле для правильного проектирования кухни.
          </div>
        </div>

        <div class="form-group my-2">
          <label for="kmaterialfacade">Материал фасада кухни:</label>
          <textarea class="form-control not-validate" name="kmaterialfacade" id="kmaterialfacade" placeholder="Пример: Материал фасада..." rows="2"></textarea>
          <div class="invalid-feedback">
            Пожалуйста, заполните это поле для правильного проектирования кухни.
          </div>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kostrov" id="kostrov">
          <label class="form-check-label" for="kostrov">Наличие острова</label>
        </div>
        <div id="kostrovblock"></div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="ksystemwaterprepare" id="ksystemwaterprepare">
          <label class="form-check-label" for="ksystemwaterprepare">Наличие систем водоподготовки</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="kkranaroundplita" id="kkranaroundplita">
          <label class="form-check-label" for="kkranaroundplita">Наличие крана воды рядом с плитой для готовки</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="klightzone" id="klightzone">
          <label class="form-check-label" for="klightzone">Подсветка зон</label>
        </div>
        <div id="klightzoneblock"></div>

      </div>

      <div class="tab">
        <h2 class="border-left border-lg border-dark pl-2 mb-3">Спальня хозяйская</h2>

        <div class="form-group my-2">
          <label class="mr-2">Спальни:</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hbrkrovati" id="hbrkrovati1" value="Раздельные" checked>
            <label class="form-check-label" for="hbrkrovati1">Раздельные</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="hbrkrovati" id="hbrkrovati2" value="Совместные">
            <label class="form-check-label" for="hbrkrovati2">Совместные</label>
          </div>
        </div>

        <div class="form-group my-2">
          <label for="hbrrazmerkrovati">Выберите желаемый размер кровати:</label>
          <div class="input-group mb-3">
            <select class="custom-select" name="hbrrazmerkrovati" id="hbrrazmerkrovati">
              <option value="Двуспальная: 180-205 см на 110-200 см" selected>Двуспальная: 180-205 см на 110-200 см</option>
              <option value="Полуторная: 190-200 см на 120-160 см">Полуторная: 190-200 см на 120-160 см</option>
              <option value="Односпальная: 186-205 на 70-106">Односпальная: 186-205 на 70-106</option>
              <option value="Кинг-сайз: 200+ на 200+">Кинг-сайз: 200+ на 200+</option>
              <option value="Другой">Другой</option>
            </select>
          </div>
          <div class="input-group" id="hbrrazmerkrovatidrblock" style="display:none;">
            <div class="input-group-prepend">
              <span class="input-group-text">Другой:</span>
            </div>
            <label for="hbrrazmerkrovati"></label>
            <input type="text" class="form-control not-validate" name="hbrrazmerkrovatidr" id="hbrrazmerkrovatidr" placeholder="Пример: Размер кровати: 200 на 200"/>
            <div class="input-group-append">
              <span class="input-group-text">cм</span>
            </div>
            <div class="invalid-feedback">
              Пожалуйста, заполните это поле для правильного проектирования хозяйской спальни.
            </div>
          </div>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrsystemuprzvukom" id="hbrsystemuprzvukom">
          <label class="form-check-label" for="hbrsystemuprzvukom">Наличие систем управления звуком</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrsystemuprsvetom" id="hbrsystemuprsvetom">
          <label class="form-check-label" for="hbrsystemuprsvetom">Наличие систем управления светом</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrsystemuprklimatom" id="hbrsystemuprklimatom">
          <label class="form-check-label" for="hbrsystemuprklimatom">Наличие систем управления климатом</label>
        </div>

        <div class="form-group my-2">
          <label for="hbribjaroundbed">Описание предметов хранения для прикроватных тумбочек:</label>
          <textarea class="form-control not-validate" name="hbribjaroundbed" id="hbribjaroundbed" placeholder="Пример: Встроенная зарядка на столешнице, сейф, механизм автозавода для механических часов, интегрированная беспроводная зарядка для Apple Watch. " rows="2"></textarea>
          <div class="invalid-feedback">
            Пожалуйста, заполните это поле для правильного проектирования хозяской спальни.
          </div>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrsvetforread" id="hbrsvetforread">
          <label class="form-check-label" for="hbrsvetforread">Наличие света для чтения</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrspecmachine" id="hbrspecmachine">
          <label class="form-check-label" for="hbrspecmachine">Наличие доп. оборудования</label>
        </div>
        <div id="hbrspecmachineblock"></div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrgarderob" id="hbrgarderob">
          <label class="form-check-label" for="hbrgarderob">Наличие гардеробной комнаты</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrsu" id="hbrsu">
          <label class="form-check-label" for="hbrsu">Наличие санузла</label>
        </div>
        <div id="hbrsublock"></div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrcabinetinbedroom" id="hbrcabinetinbedroom">
          <label class="form-check-label" for="hbrcabinetinbedroom">Наличие кабинета в спальне</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrtouilettable" id="hbrtouilettable">
          <label class="form-check-label" for="hbrtouilettable">Наличие туалетного столика</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrsystemstoragepolotenec" id="hbrsystemstoragepolotenec">
          <label class="form-check-label" for="hbrsystemstoragepolotenec">Система хранения полотенец</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrsystemwashnizbel" id="hbrsystemwashnizbel">
          <label class="form-check-label" for="hbrsystemwashnizbel">Система постирки нижнего белья</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrsystemsushki" id="hbrsystemsushki">
          <label class="form-check-label" for="hbrsystemsushki">Система сушки</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrtv" id="hbrtv">
          <label class="form-check-label" for="hbrtv">Наличие ТВ</label>
        </div>
        <div id="hbrtvblock"></div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrproector" id="hbrproector">
          <label class="form-check-label" for="hbrproector">Наличие проектора</label>
        </div>

        <!-- <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrgunsseif" id="hbrgunsseif">
          <label class="form-check-label" for="hbrgunsseif">Наличие сейфа для оружия</label>
        </div> -->

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrpigams" id="hbrpigams">
          <label class="form-check-label" for="hbrpigams">Наличие вешалки под пижамы</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbruvlazh" id="hbruvlazh">
          <label class="form-check-label" for="hbruvlazh">Увлажнение отдельно</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrfreshair" id="hbrfreshair">
          <label class="form-check-label" for="hbrfreshair">Очистка воздуха отдельно</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrsplitsys" id="hbrsplitsys">
          <label class="form-check-label" for="hbrsplitsys">Кондиционирование отдельно</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="hbrhifi" id="hbrhifi">
          <label class="form-check-label" for="hbrhifi">Наличие звука или спец аппаратуры Hi-Fi</label>
        </div>

      </div>

      <div class="tab">
        <h2 class="border-left border-lg border-dark pl-2 mb-3">Спальни спец назначения - дети, пожилые</h2>

        <div class="alert alert-success" role="alert" id="sbralert" style="display: none;">
          Нет полей для заполнения, так как в Вашей семье для этого нет необходимости.
        </div>

        <div class="form-check my-2 ml-2" id="sbrcreplforwcblock" style="display: none;">
          <input class="form-check-input" type="checkbox" value="Да" name="sbrcreplforwc" id="sbrcreplforwc">
          <label class="form-check-label" for="sbrcreplforwc">Крепления для сидений унитаза</label>
        </div>

        <div class="form-check my-2 ml-2" id="sbrelevatorforcatalocblock" style="display: none;">
          <input class="form-check-input" type="checkbox" value="Да" name="sbrelevatorforcataloc" id="sbrelevatorforcataloc">
          <label class="form-check-label" for="sbrelevatorforcataloc">Лифты для каталок</label>
        </div>

        <div class="form-check my-2 ml-2" id="sbrsystemupblock" style="display: none;">
          <input class="form-check-input" type="checkbox" value="Да" name="sbrsystemup" id="sbrsystemup">
          <label class="form-check-label" for="sbrsystemup">Системы подъема</label>
        </div>

        <div class="form-group my-2" id="sbrdrugoeblock" style="display: none;">
          <label for="sbrdrugoe">Другое:</label>
          <textarea class="form-control not-validate" name="sbrdrugoe" id="sbrdrugoe" placeholder="Пример: Нужно установить подъем рядом с лестницей для инвалидного кресла..." rows="2"></textarea>
          <div class="invalid-feedback">
            Пожалуйста, заполните это поле для правильного проектирования спец спальни.
          </div>
        </div>

        <div class="form-group my-2" id="sbrwishesblock" style="display: none;">
          <label for="sbrwishes">Пожелания для детских комнат и с.у.:</label>
          <textarea class="form-control not-validate" name="sbrwishes" id="sbrwishes" placeholder="Пример: Нужно установить туалет для ребенка (детский) рядом с большим..." rows="2"></textarea>
          <div class="invalid-feedback">
            Пожалуйста, заполните это поле для правильного проектирования спец спальни.
          </div>
        </div>

      </div>

      <div class="tab">
        <h2 class="border-left border-lg border-dark pl-2 mb-3">Гардеробная</h2>

        <div id="garblock0"></div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="guvlsush" id="guvlsush">
          <label class="form-check-label" for="guvlsush">Системы увлажнения одежды или сушки обуви</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="gdelpyl" id="gdelpyl">
          <label class="form-check-label" for="gdelpyl">Системы пыле удаления</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="gglazhka" id="gglazhka">
          <label class="form-check-label" for="gglazhka">Системы глажки</label>
        </div>

        <div class="form-check my-2">
          <input class="form-check-input" type="checkbox" value="Да" name="gclean" id="gclean">
          <label class="form-check-label" for="gclean">Системы стирки</label>
        </div>

        <hr class="my-4">

        <!-- <div class="form-group my-2">
          <label for="inoe0">Иные пожелания:</label>
          <textarea class="form-control not-validate" name="inoe0" id="inoe0" placeholder="Ещё..." rows="2"></textarea>
          <div class="invalid-feedback">
            Пожалуйста, заполните это поле для правильного формирования проекта.
          </div>
        </div> -->
        <div id="inoeblock1"></div>

        <div class="text-right my-2">
          <p class="small">Добавьте иные пожелания к Вашему проекту</p>
          <label class="custom-file-upload" data-toggle="tooltip" data-placement="left" title="Удалить одно поле иное" onclick="closeInoe()" id="inoeclose" style="display: none;">
              <i class="fas fa-times"></i>
          </label>
          <label class="custom-file-upload" data-toggle="tooltip" data-placement="left" title="Добавить поле иное" onclick="addInoe()">
              <i class="fas fa-plus"></i>
          </label>
        </div>

        <!-- <div class="form-group my-2">
          <label for="dop0">Дополнения:</label>
          <textarea class="form-control not-validate" name="dop0" id="dop0" placeholder="Ещё..." rows="2"></textarea>
          <div class="invalid-feedback">
            Пожалуйста, заполните это поле для правильного формирования проекта.
          </div>
        </div> -->

        <div id="dopblock1"></div>

        <div class="text-right my-2">
          <p class="small">Добавьте дополнeния к Вашему проекту</p>
          <label class="custom-file-upload" data-toggle="tooltip" data-placement="left" title="Удалить одно поле дополнение" onclick="closeDop()" id="dopclose" style="display: none;">
              <i class="fas fa-times"></i>
          </label>
          <label class="custom-file-upload" data-toggle="tooltip" data-placement="right" title="Добавить поле дополнение" onclick="addDop()">
              <i class="fas fa-plus"></i>
          </label>
        </div>

      </div>

      <div class="d-flex my-3">
        <div class="mr-auto">
          <button type="button" class="btn btn-secondary" id="prevBtn" onclick="nextPrev(-1)">Назад</button>
        </div>
        <div>
          <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Дальше</button>
        </div>
      </div>
    </form>
    <div class="d-block d-sm-none d-flex flex-row mb-2 justify-content-center" id='xs-steps'>
      <div class="p-2">
        <div class="dot dot4 text-center mx-auto xs-step"></div>
      </div>
      <div class="p-2">
        <div class="dot dot4 text-center mx-auto xs-step"></div>
      </div>
      <div class="p-2">
        <div class="dot dot4 text-center mx-auto xs-step"></div>
      </div>
      <div class="p-2">
        <div class="dot dot4 text-center mx-auto xs-step"></div>
      </div>
      <div class="p-2">
        <div class="dot dot4 text-center mx-auto xs-step"></div>
      </div>
      <div class="p-2">
        <div class="dot dot4 text-center mx-auto xs-step"></div>
      </div>
      <div class="p-2">
        <div class="dot dot4 text-center mx-auto xs-step"></div>
      </div>
      <div class="p-2">
        <div class="dot dot4 text-center mx-auto xs-step"></div>
      </div>
    </div>
  </div>
  <div class="d-none d-sm-block col-12 col-sm-2" id='sm-steps'>
    <div class="sticky-top">
      <div class="d-flex flex-row mb-2">
        <div class="p-2">
          <div class="dot dot3 text-center mx-auto step" id='start'></div>
        </div>
        <div class="p-1 title-btn-3">Объект</div>
      </div>

      <div class="d-flex flex-row mb-2">
        <div class="p-2">
          <div class="dot dot3 text-center mx-auto step"></div>
        </div>
        <div class="p-1 title-btn-3">Доп. комнаты</div>
      </div>

      <div class="d-flex flex-row mb-2">
        <div class="p-2">
          <div class="dot dot3 text-center mx-auto  step"></div>
        </div>
        <div class="p-1 title-btn-3">Особенности</div>
      </div>

      <div class="d-flex flex-row mb-2">
        <div class="p-2">
          <div class="dot dot3 text-center mx-auto step"></div>
        </div>
        <div class="p-1 title-btn-3">Прихожая</div>
      </div>

      <div class="d-flex flex-row mb-2">
        <div class="p-2">
          <div class="dot dot3 text-center mx-auto step"></div>
        </div>
        <div class="p-1 title-btn-3">Кухня</div>
      </div>

      <div class="d-flex flex-row mb-2">
        <div class="p-2">
          <div class="dot dot3 text-center mx-auto step"></div>
        </div>
        <div class="p-1 title-btn-3">Спальня хозяйская</div>
      </div>

      <div class="d-flex flex-row mb-2">
        <div class="p-2">
          <div class="dot dot3 text-center mx-auto step"></div>
        </div>
        <div class="p-1 title-btn-3">Спец спальни</div>
      </div>

      <div class="d-flex flex-row mb-2">
        <div class="p-2">
          <div class="dot dot3 text-center mx-auto step" id='end'></div>
        </div>
        <div class="p-1 title-btn-3">Гардеробная</div>
      </div>

    </div>
  </div>
</div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/leader-line.min.js') }}"></script>
<script src="{{ asset('js/anim-event.min.js') }}"></script>
<script src="{{ asset('js/jquery.inputmask.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/js/jquery.suggestions.min.js" defer></script>
<script src="{{ asset('js/question.js') }}"></script>
@endsection
