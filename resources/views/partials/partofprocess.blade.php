<div class="p-3" id="proccesslist">
  <div class="row">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot1 text-center linelead mx-auto" onclick="Showblock('startblock')" id="start">
          <i class="fas fa-box-open"></i>
        </div>
    </div>
    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
      <a class="title-btn title-btn-1" onclick="Showblock('startblock')">Формирование проекта</a>
    </div>
  </div>

  <!-- Формирование проекта -->
  <div class="startblock" style="display:none;" id="startblock">
      <!-- ШАГ 1 -->
      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto startblock" style="display:none;"  onclick="Showblock('step1block')" id='step1'>
            <i class="fas fa-plus" id="showstep1blockicon" ></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <a class="title-btn title-btn-2" onclick="Showblock('step1block')">Шаг 1</a>
        </div>
      </div>

      <div class="step1block" style="display:none;">

        <div class="row mt-3">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
            <div class="dot dot3 text-center mx-auto" id='step11'></div>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h3 class="title-btn-3">Заполнение опросника</h3>
            <a href="{{route('oprosnik')}}" class="title-btn title-btn-4">Заполнить онлайн</a>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
            <div class="dot dot4 text-center mx-auto" id='step111'></div>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h4 class="title-btn-4">Выясняем любимый цвет, Правша или Левша, Как удобно расположить кровать, и.т.п.</h4>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
            <div class="dot dot3 text-center mx-auto" id='step12'></div>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h3 class="title-btn-3">Просмотр или помощь в выборе участка для проекта</h3>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
            <div class="dot dot4 text-center mx-auto" id='step121'></div>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h4 class="title-btn-4">Проверяем документы, смотрим на расположение, проверяем наличие запретов на месте желаемого строительства</h4>
          </div>
        </div>

        <div class="row mt-1">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
            <div class="dot dot5 text-center mx-auto" id='step1211'></div>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h4 class="title-btn-5">Вносим понимание в наличие коммуникаций</h4>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
            <div class="dot dot3 text-center mx-auto" id='step13'></div>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h3 class="title-btn-3">Создаем техническое задание</h3>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
            <div class="dot dot4 text-center mx-auto" id='step131'></div>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h4 class="title-btn-4">Формируем стоимость этапов</h4>
          </div>
        </div>

        <div class="row mt-1">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
            <div class="dot dot5 text-center mx-auto" id='step1211'></div>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h4 class="title-btn-5">Проводим согласование этапов и договоров</h4>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
            <div class="dot dot2 text-center linelead mx-auto step1block" style="display:none;" id='closestep1block'  onclick="Showblock('step1block')" >
              <i class="fas fa-times"></i>
            </div>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
        </div>

      </div>

    <!-- ШАГ 2 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center linelead mx-auto startblock" style="display:none;"  onclick="Showblock('step2block')" id='step2'>
          <i class="fas fa-plus" id="showstep2blockicon" ></i>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <a class="title-btn title-btn-2" onclick="Showblock('step2block')">Шаг 2</a>
      </div>
    </div>

    <div class="step2block" style="display:none;">

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step21'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Подготовительный этап</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step211'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Сбор всех документов</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step212'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Получение ГПЗУ</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step213'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Получение и знакомство с правилами поселка или поселения</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step214'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Изыскание на участке (проверка грунта)</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step215'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Получение тех. условий для подключения коммуникаций</h4>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step22'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Согласование внешнего вида, стиля, цвета, материалов</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step221'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Внешние коммуникации и безопасность</h4>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step23'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Формирование перечня действий согласно бюджету</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step231'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Геологические изыскания и установка точек привязок</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step232'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Перечень зданий и сооружений их этажность и высотность</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step233'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Материалы несущих конструкций</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step234'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Материалы стен и кровли</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step235'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Общие пожелания по инженерным системам и интерьеру</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step236'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Материалы отделки фасада</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step237'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Концепция участка</h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto step2block" style="display:none;" id='closestep2block'  onclick="Showblock('step2block')" >
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
      </div>

    </div>

    <!-- ШАГ 3 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center linelead mx-auto startblock" style="display:none;"  onclick="Showblock('step3block')" id='step3'>
          <i class="fas fa-plus" id="showstep3blockicon" ></i>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <a class="title-btn title-btn-2" onclick="Showblock('step3block')">Шаг 3</a>
      </div>
    </div>

    <div class="step3block" style="display:none;">

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step31'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Эскизы</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step311'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Эскизный проект благоустройства участка</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step312'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Эскизный план освещения участка</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step313'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Эскизный план отвода воды</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step314'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Эскизный план систем полива</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step315'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Эскизный план строений на участке</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step316'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Виды растений и их расположение</h4>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step32'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Планировка</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step321'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Согласование нескольких вариантов планировочных решений</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step322'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Согласование расстановки мебели</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step323'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Согласование количества с.у. и точек привязки сантехники</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step324'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Расчет и согласование мощности котельной и планируемых отопительных решений (доп. камин)</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step325'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Цветовые решения и внешний вид</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step326'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Решение по молнее защите и др. нормам</h4>
        </div>
      </div>


      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto step3block" style="display:none;" id='closestep3block'  onclick="Showblock('step3block')" >
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
      </div>

    </div>

    <!-- ШАГ 4 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center linelead mx-auto startblock" style="display:none;"  onclick="Showblock('step4block')" id='step4'>
          <i class="fas fa-plus" id="showstep4blockicon" ></i>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <a class="title-btn title-btn-2" onclick="Showblock('step4block')">Шаг 4</a>
      </div>
    </div>

    <div class="step4block" style="display:none;">

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step41'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Эскизный проект интерьера</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step42'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Уведомление и получение разрешений на строительство</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step43'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Композитные и цветовые решения</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step44'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Согласование</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step441'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Двери</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step442'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Поверхность стен, потолков, откосов, полов, подоконников и окон</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step443'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Предмет декора (лепнина, элементы декора)</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step444'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Теплые полы и управление</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step445'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Отопительные приборы</h4>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot5 text-center mx-auto" id='step4451'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-5">Подбор мебели и согласование оборудования</h4>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step45'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Спецразделы</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step451'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Бассейн</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step452'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Хаммам</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step453'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Камин</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step454'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Умный дом</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step455'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Умный сад</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step456'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Центральный пылесос</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step457'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Интернет и слаботочные системы</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step458'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Снегоочистка и снеготаяние</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step459'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Резервное  электроснабжение</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step4510'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Бункера и Подвалы</h4>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step46'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Рабочий проект</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step461'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Размеры всего</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step462'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Порог стен потолка кровли и используемая карта материалов</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step463'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Узлы примыканий по всем конструкциям</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step464'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Ведомость остекления</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step465'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Расчёт несущих конструкций</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step466'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Конструктив фундамента</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step467'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Перекрытие</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step468'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Кровля</h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto step4block" style="display:none;" id='closestep4block'  onclick="Showblock('step4block')" >
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
      </div>

    </div>


    <!-- ШАГ 5 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center linelead mx-auto startblock" style="display:none;"  onclick="Showblock('step5block')" id='step5'>
          <i class="fas fa-plus" id="showstep5blockicon" ></i>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <a class="title-btn title-btn-2" onclick="Showblock('step5block')">Шаг 5</a>
      </div>
    </div>

    <div class="step5block" style="display:none;">

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step51'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Рабочий проект</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step511'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Размеры</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step512'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Спецификация светильников и форнитуры</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step513'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Развертки стен</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step514'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Размеры и конфигурация мебели</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step515'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Ведомость дверей и окон с их открыванием</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step516'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Спецификация подоконников и столешниц</h4>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step52'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Итоговая смета и ее утверждение</h3>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto step5block" style="display:none;" id='closestep5block'  onclick="Showblock('step5block')" >
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
      </div>

    </div>

    <!-- ШАГ 6 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center linelead mx-auto startblock" style="display:none;"  onclick="Showblock('step6block')" id='step6'>
          <i class="fas fa-plus" id="showstep6blockicon" ></i>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <a class="title-btn title-btn-2" onclick="Showblock('step6block')">Шаг 6</a>
      </div>
    </div>

    <div class="step6block" style="display:none;">

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step61'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Создание виртуального дома и согласование</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step62'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Составление конечной сметы</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='step63'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Создание технических проектов</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step631'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Инженерия</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step632'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Фундамент</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step633'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Перекрытие</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step634'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Кровля и т.п.</h4>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto step6block" style="display:none;" id='closestep6block'  onclick="Showblock('step6block')" >
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
      </div>

    </div>

    <!-- Дополнительные события -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center linelead mx-auto startblock" style="display:none;"  onclick="Showblock('stepdopblock')" id='stepdop'>
          <i class="fas fa-plus" id="showstepdopblockicon" ></i>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <a class="title-btn title-btn-2" onclick="Showblock('stepdopblock')">Дополнительные события</a>
      </div>
    </div>

    <div class="stepdopblock" style="display:none;">

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stepdop1'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Стиль и расположение световых приборов и их систем управления</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stepdop2'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Доп. Соглашение</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stepdop3'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Технический дизайн проект</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stepdop31'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <p class="title-btn-4">Котельная, Отопление, Вентиляция, Водоснабжение, Канализация, Электроснабжение, Кондиционирование, Увлажнение, Ливневая канализация, Система подачи воды на участок, Дренирование, Гидроизоляция, Звукоизоляция, Автоматика</p>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stepdop32'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Конструкция пожарно-охранных систем, а так же контроль протечек</h4>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stepdop4'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Смета на строительство коробки и согласование бюджета</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stepdop5'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Спецификация мебели</h3>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto stepdopblock" style="display:none;" id='closestepdopblock'  onclick="Showblock('stepdopblock')" >
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
      </div>

    </div>


    <!-- КНОПКА ЗАКРЫТИЯ ФП -->
    <div class="row mt-5">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="square text-center linelead mx-auto startblock" style="display:none;" id="showstartblock" onclick="Showblock('startblock')">
          <i class="fas fa-plus" id="showstartblockicon" ></i>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot1 text-center mx-auto linelead" onclick="Showblock('stage1block')" id="stage1">
          <i class="fas fa-hammer"></i>
        </div>
    </div>
    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
      <a class="title-btn title-btn-1" onclick="Showblock('stage1block')"> Первый этап строительных работ</a>
    </div>
  </div>

  <div class="stage1block" style="display:none;" id="stage1block">

    <!-- stage11 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center linelead mx-auto stage1block" style="display:none;"  onclick="Showblock('stage11block')" id='stage11'>
          <i class="fas fa-plus" id="showstage11blockicon" ></i>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <a class="title-btn title-btn-2" onclick="Showblock('stage11block')">Строительство основного сооружения</a>
      </div>
    </div>

    <div class="stage11block" style="display:none;">

      <!-- Геодезические работы (установка и отбивка всех уровней) -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage111'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Геодезические работы (установка и отбивка всех уровней)</h3>
        </div>
      </div>

      <!-- Подготовка работ -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage112'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Подготовка работ</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step1121'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Доставка бытовок</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step1122'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Доставка био туалетов</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step1123'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Доставка воды (на первоначальное время)</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1124'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Временное электроснабжение (подключение и разводка)</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1125'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Формирование площадки для складирования материалов</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1126'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Организация мест для подъезда тяжелой техники</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1127'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Временные ограждения</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1128'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Определение места под будущий вывоз мусора</h4>
        </div>
      </div>
      <!-- End Подготовка работ -->

      <!-- Заказ техники и выравнивание участка -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage113'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Заказ техники и выравнивание участка</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1131'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Формирование рельефа под сооружения</h4>
        </div>
      </div>
      <!-- end Заказ техники и выравнивание участка -->

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage114'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Формирование дренажных систем на участке и установка колодцев</h3>
        </div>
      </div>

      <!-- Подводка электрики на точки зон электроснабжения на участке -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage115'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Подводка электрики на точки зон электроснабжения на участке</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step1151'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Насосы для откачки сводных вод</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step1152'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Септик если есть</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='step1153'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Доп. постройки</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1154'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Распределительный щит освещения улицы</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1155'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Система электродвигателей ворот и подачи напряжения на дверь для электрозамка</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1156'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Слаботочные системы камер</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1157'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Щит системы полива и орошения и т.п.</h4>
        </div>
      </div>
      <!-- end Подводка электрики на точки зон электроснабжения на участке -->

      <!-- Организация сетей под фундаментом -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage116'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Организация сетей под фундаментом</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1161'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Завод гильз под электричество</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1162'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Завод гильз под слаботочку</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1163'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Устройство отводов канализации</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1164'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Ввод трассы подачи ХВС</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage1165'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Дополнительные резервные вводы</h4>
        </div>
      </div>
      <!-- end Организация сетей под фундаментом -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage117'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Организация и прокладка труб ливневой канализации</h3>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto stage11block" style="display:none;" id='closestage11block'  onclick="Showblock('stage11block')" >
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
      </div>

    </div>

    <!-- stage12 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center linelead mx-auto stage1block" style="display:none;"  onclick="Showblock('stage12block')" id='stage12'>
          <i class="fas fa-plus" id="showstage12blockicon" ></i>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <a class="title-btn title-btn-2" onclick="Showblock('stage12block')">Основные работы</a>
      </div>
    </div>

    <div class="stage12block" style="display:none;">

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage121'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Устройство выбранного типа фундамента</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage122'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Устройство и связь фундаментов под крыльцом и террасой</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage123'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Формирование стен и перегородок</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage124'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Установка перекрытия</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage125'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Утепление</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage126'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Гидроизоляция</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage127'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Установка закладных под лестницы</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage128'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Шахты вент каналов и дымоходов</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage129'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Облицовка сооружения</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage1210'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Кровельные работы</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage1211'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Устройство стоков и снего задержания</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage1212'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Прокладка систем подогрева стоков</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage1213'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Фасадные работы</h3>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto stage12block" style="display:none;" id='closestage12block'  onclick="Showblock('stage12block')" >
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
      </div>

    </div>

    <!-- stage13 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage13'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Установка ограждений</h2>
      </div>
    </div>

    <!-- stage14 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage14'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Установка дренажных систем по ограждениям</h2>
      </div>
    </div>

    <!-- stage15 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage15'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Согласование дополнительных работ</h2>
      </div>
    </div>

    <!-- stage16 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage16'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Процесс газификации или установки газгольдера</h2>
      </div>
    </div>

    <!-- КНОПКА ЗАКРЫТИЯ Этап 1 -->
    <div class="row mt-5">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="square text-center linelead mx-auto stage1block" style="display:none;" id="showstage1block" onclick="Showblock('stage1block')">
          <i class="fas fa-plus" id="showstage1blockicon" ></i>
        </div>
      </div>
    </div>

  </div>

  <div class="row mt-5">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot1 text-center mx-auto linelead" onclick="Showblock('stage2block')" id="stage2">
          <i class="fas fa-brush"></i>
        </div>
    </div>
    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
      <a class="title-btn title-btn-1" onclick="Showblock('stage2block')">Второй этап строительных работ</a>
      <br>
      <a class="title-btn title-btn-3" onclick="Showblock('stage2block')">(Инженерия и Черновые работы)</a>
    </div>
  </div>

  <div class="stage2block" style="display:none;">

    <!-- stage21 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage21'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Процесс газификации или установки газгольдера</h2>
      </div>
    </div>

    <!-- stage22 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center linelead mx-auto stage2block" style="display:none;"  onclick="Showblock('stage22block')" id='stage22'>
          <i class="fas fa-plus" id="showstage22blockicon" ></i>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <a class="title-btn title-btn-2" onclick="Showblock('stage22block')">Работы по подключению наружных сетей</a>
      </div>
    </div>

    <div class="stage22block" style="display:none;">

      <!-- Подключение воды -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage221'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Подключение воды</h3>
        </div>
      </div>

      <!-- Подключение канализации -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage222'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Подключение канализации</h3>
        </div>
      </div>

      <!-- Подключение электричества -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage223'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Подключение электричества</h3>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto stage22block" style="display:none;" id='closestage22block'  onclick="Showblock('stage22block')" >
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
      </div>

    </div>

    <!-- stage23 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage23'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Точные замеры окон и дверей</h2>
      </div>
    </div>

    <!-- stage24 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage23'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Штукатурные работы</h2>
      </div>
    </div>

    <!-- stage25 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center linelead mx-auto stage2block" style="display:none;"  onclick="Showblock('stage25block')" id='stage25'>
          <i class="fas fa-plus" id="showstage25blockicon" ></i>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <a class="title-btn title-btn-2" onclick="Showblock('stage25block')">Остекление после штукатурных работ</a>
      </div>
    </div>

    <div class="stage25block" style="display:none;">

      <!-- Нанесение защиты на окна -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage251'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Нанесение защиты на окна</h3>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto stage25block" style="display:none;" id='closestage25block'  onclick="Showblock('stage25block')" >
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
      </div>

    </div>

    <!-- stage26 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage26'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Утверждение сметы на черновые работы возможная корректировка</h2>
      </div>
    </div>

    <!-- stage27 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center linelead mx-auto stage2block" style="display:none;"  onclick="Showblock('stage27block')" id='stage27'>
          <i class="fas fa-plus" id="showstage27blockicon" ></i>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <a class="title-btn title-btn-2" onclick="Showblock('stage27block')">Внутренние черновые работы</a>
      </div>
    </div>

    <div class="stage27block" style="display:none;">

      <!-- Подготовка и штукатурка стен -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage271'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Подготовка и штукатурка стен</h3>
        </div>
      </div>

      <!-- Монтаж канализации -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage272'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Монтаж канализации</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2721'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Монтаж трапов и инсталяций</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2722'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Монтаж отвода канализации согласно проектов</h4>
        </div>
      </div>

      <!-- Монтаж отопления -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage273'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Подготовка котельной и систем электричества</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2721'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Подготовка котельной и систем электричества</h4>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot5 text-center mx-auto" id='stage27211'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-5">Устройство сливных и аварийных систем</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2722'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Прокладка труб отопления в утеплителе</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2723'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Установка розеток для батарейв</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2724'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Устройство ниш и мест под крепление отопительных приборов</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2725'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Монтаж коллекторных систем</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2726'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Устройство теплого пола (если не электро)</h4>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot5 text-center mx-auto" id='stage27261'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-5">Монтаж шкафов распределения теплого пола</h4>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot5 text-center mx-auto" id='stage27262'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-5">Устройство теплого пола</h4>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot5 text-center mx-auto" id='stage27263'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-5">Устройство пирога утеплителя для теплого пола</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2727'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Монтаж электрики для систем отопления и управления</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2728'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Монтаж отопительных приборов (в самый последний момент после всех грязных работ)</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2729'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Установка котла для резерва системы (электрический)</h4>
        </div>
      </div>

      <!-- Монтаж системы контроля и очистки воды -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage274'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Монтаж системы контроля и очистки воды</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2741'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Установка систем слива для промывки сисемы</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2742'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Устройство аварийного переключения на основную магистраль</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2743'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Устройство аварийного перекрытия</h4>
        </div>
      </div>

      <!-- Монтаж систем воздуховодов и вентиляции -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage275'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Монтаж систем воздуховодов и вентиляции</h3>
        </div>
      </div>

      <!-- Работы по черновой электрике -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage276'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Работы по черновой электрике</h3>
        </div>
      </div>

      <!-- Монтаж слаботочных систем -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage277'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Монтаж слаботочных систем</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2771'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Датчики температур</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2772'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Интернет</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2773'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Охрана</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2774'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Датчики протечки</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2775'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Системы видео контродля</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage2776'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Системы полива</h4>
        </div>
      </div>

      <!-- Монтаж трасс кондиционирования -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage278'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Монтаж трасс кондиционирования</h3>
        </div>
      </div>

      <!-- Устройство стяжки пола -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage279'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Устройство стяжки пола</h3>
        </div>
      </div>

      <!-- Устройство гипсокартонных конструкций -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage2710'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Устройство гипсокартонных конструкций</h3>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto stage27block" style="display:none;" id='closestage27block'  onclick="Showblock('stage27block')" >
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
      </div>

    </div>

    <!-- stage28 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center linelead mx-auto stage2block" style="display:none;"  onclick="Showblock('stage28block')" id='stage28'>
          <i class="fas fa-plus" id="showstage28blockicon" ></i>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <a class="title-btn title-btn-2" onclick="Showblock('stage28block')">Фасадные работы</a>
      </div>
    </div>

    <div class="stage28block" style="display:none;">

      <!-- Декоративные элементы -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage281'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Декоративные элементы</h3>
        </div>
      </div>

      <!-- Отделка (если не кирпич) -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage282'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Отделка (если не кирпич)</h3>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto stage28block" style="display:none;" id='closestage28block'  onclick="Showblock('stage28block')" >
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
      </div>

    </div>

    <!-- stage29 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center linelead mx-auto stage2block" style="display:none;"  onclick="Showblock('stage29block')" id='stage29'>
          <i class="fas fa-plus" id="showstage29blockicon" ></i>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <a class="title-btn title-btn-2" onclick="Showblock('stage29block')">Запуск всех систем включая газ (если он есть на объекте)</a>
      </div>
    </div>

    <div class="stage29block" style="display:none;">

      <!-- Пусконаладка всех систем -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage291'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Пусконаладка всех систем</h3>
        </div>
      </div>

      <!-- Тестовый период и настройка -->
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage292'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Тестовый период и настройка</h3>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto stage29block" style="display:none;" id='closestage29block'  onclick="Showblock('stage29block')" >
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
      </div>

    </div>

    <!-- КНОПКА ЗАКРЫТИЯ Этап 1 -->
    <div class="row mt-5">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="square text-center linelead mx-auto stage2block" style="display:none;" id="showstage2block" onclick="Showblock('stage2block')">
          <i class="fas fa-plus" id="showstage2blockicon" ></i>
        </div>
      </div>
    </div>

  </div>

  <!-- Третий этап строительных работ -->
  <div class="row mt-5">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot1 text-center mx-auto linelead" onclick="Showblock('stage3block')" id="stage3">
          <i class="fas fa-paint-roller"></i>
        </div>
    </div>
    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
      <a class="title-btn title-btn-1" onclick="Showblock('stage3block')">Третий этап строительных работ</a>
      <br>
      <a class="title-btn title-btn-3" onclick="Showblock('stage3block')">(Чистовая отделка и подгонка)</a>
    </div>
  </div>

  <div class="stage3block" style="display:none;" id="stage3block">

    <!-- stage31 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center linelead mx-auto stage3block" style="display:none;"  onclick="Showblock('stage31block')" id='stage31'>
          <i class="fas fa-plus" id="showstage31blockicon" ></i>
        </div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <a class="title-btn title-btn-2" onclick="Showblock('stage31block')">Чистовые работы</a>
      </div>
    </div>

    <div class="stage31block" style="display:none;">

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage311'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Финишная отделка потолков и стен</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage312'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Укладка напольных покрытий</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage3121'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Этап 1 - Дерево или Ламинат</h4>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage3122'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Этап 2 - Плитка или Камень</h4>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage313'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Отделка лестницы</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage3131'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Установка ограждений</h4>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage314'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Монтаж подоконников и столешниц</h3>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot4 text-center mx-auto" id='stage3131'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h4 class="title-btn-4">Иногда откосов (если они из камня или других материалов)</h4>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage315'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Монтаж электрофорнитуры</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage316'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Установка блоков кондиционеров и систем вентиляции</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage317'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Установка сантехники</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage318'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Расстановка мебели</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage319'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Установка дверей</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage3110'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Монтаж плинтуса</h3>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot3 text-center mx-auto" id='stage3111'></div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h3 class="title-btn-3">Работы по подгонке и доделкам</h3>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
          <div class="dot dot2 text-center linelead mx-auto stage31block" style="display:none;" id='closestage31block'  onclick="Showblock('stage31block')" >
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"></div>
      </div>

    </div>

    <!-- stage32 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage32'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Благоустройство</h2>
      </div>
    </div>

    <!-- stage33 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage33'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Отделка Цоколя</h2>
      </div>
    </div>

    <!-- stage34 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage34'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Отделка Террасы Крылец Наружних ступенией</h2>
      </div>
    </div>

    <!-- stage35 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage35'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Установка ландшафтного декора</h2>
      </div>
    </div>

    <!-- stage36 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage36'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Посадка растений</h2>
      </div>
    </div>

    <!-- stage37 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage37'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Установочные и пуско наладочные работы по системам полива и увлажнения</h2>
      </div>
    </div>

    <!-- stage38 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage38'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Укладка газонов</h2>
      </div>
    </div>

    <!-- stage39 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage39'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Настройка датчиков движения и освещения на территории</h2>
      </div>
    </div>

    <!-- stage310 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage310'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Настройка света на территории</h2>
      </div>
    </div>

    <!-- stage311 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage311'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Обучение клиента для работы с мобильными приложениями и системами контроля доступа</h2>
      </div>
    </div>

    <!-- stage312 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage312'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Подача документов на здачу объекта</h2>
      </div>
    </div>

    <!-- stage313 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage313'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Подписание Акта приема передачи</h2>
      </div>
    </div>

    <!-- stage314 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="dot dot2 text-center mx-auto" id='stage314'></div>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-btn-2">Гарантии и обязательства.</h2>
      </div>
    </div>

    <!-- КНОПКА ЗАКРЫТИЯ Этап 3 -->
    <div class="row mt-5">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
        <div class="square text-center linelead mx-auto stage3block" style="display:none;" id="showstage3block" onclick="Showblock('stage3block')">
          <i class="fas fa-plus" id="showstage3blockicon" ></i>
        </div>
      </div>
    </div>

  </div>


  <div class="row mt-5">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
      <div class="dot dot1 text-center mx-auto linelead" id="end">
        <i class="fas fa-box"></i>
      </div>
    </div>
    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
      <h1 class="title-btn-1">Финиш</h1>
    </div>
  </div>
</div>
