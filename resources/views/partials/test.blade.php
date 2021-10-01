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


  <div class="row mt-1">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 p-0">
      <div class="dot dot5 text-center mx-auto" id='step1211'></div>
    </div>
    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
      <h4 class="title-btn-5">Вносим понимание в наличие коммуникаций</h4>
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

















<div class="bg-dark  rounded p-3" id="proccesslist">
  <div class="row">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot1 text-center linelead" id="start">
          <i class="fas fa-box-open"></i>
        </span>
    </div>
    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
      <h1 class="title-white1" onclick="Showblock('startblock')">Формирование проекта</h1>
    </div>
  </div>

  <div class="startblock" style="display:none;" id="startblock">
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='step1'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2" onclick="Showblock('step1block')">Шаг 1</h2>
      </div>
    </div>

    <div class="step1block" style="display:none;">
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step11'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30" onclick="Showblock('step11block')">Заполнение опросника</h2>
          <a type="button" class="btn btn-light">Перейти к заполнению</a>
        </div>
      </div>

      <div class="step11block" id="step11block" style="display:none;">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step111'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Выясняем любимый цвет, Правша или Левша, Как удобно расположить кровать, и.т.п.</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
            <span class="square text-center" id="showstep11block" onclick="Showblock('step11block')">
              <i class="fas fa-plus" id="showstep11blockicon" ></i>
            </span>
          </div>
        </div>
      </div>



      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step12'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30" onclick="Showblock('step12block')">Просмотр или помощь в выборе участка для проекта</h2>
        </div>
      </div>

      <div class="step12block" id='step12block' style="display:none;">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step121'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4" onclick="Showblock('step121block')">Проверяем документы, смотрим на расположение, проверяем наличие запретов на месте желаемого строительства</h2>
          </div>
        </div>
        <div class="step121block" id='step121block' style="display:none;">
          <div class="row mt-1">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
              <span class="dot5 text-center" id='step1211'></span>
            </div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
              <h2 class="title-white5">Вносим понимание в наличие коммуникаций</h2>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right add-list">
              <span class="square text-center" id="showstep121block" onclick="Showblock('step121block')">
                <i class="fas fa-plus" id="showstep121blockicon" ></i>
              </span>
            </div>
          </div>
        </div>


        <div class="row mt-2">
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
            <span class="square text-center" id="showstep12block" onclick="Showblock('step12block')">
              <i class="fas fa-plus" id="showstep12blockicon" ></i>
            </span>
          </div>
        </div>
      </div>



      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step13'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Создаем техническое задание</h2>
        </div>
      </div>

      <div class="step13block" style="display:none;">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step131'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Формируем стоимость этапов</h2>
          </div>
        </div>

        <div class="step131block" style="display:none;">
          <div class="row mt-1">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
              <span class="dot5 text-center" id='step1211'></span>
            </div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
              <h2 class="title-white5">Проводим согласование этапов и договоров</h2>
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right add-list">
            <span class="square text-center" id="showstep131block" onclick="Showblock('step131block')">
              <i class="fas fa-plus" id="showstep131blockicon" ></i>
            </span>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstep13block" onclick="Showblock('step13block')">
            <i class="fas fa-plus" id="showstep13blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
          <span class="square text-center" id="showstep1block" onclick="Showblock('step1block')">
            <i class="fas fa-plus" id="showstep1blockicon" ></i>
          </span>
        </div>
      </div>
    </div>


    <!-- Шаг 2 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='step2'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Шаг 2</h2>
      </div>
    </div>

    <div class="step2block" style="display:none;">
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step21'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Подготовительный этап</h2>
        </div>
      </div>

      <div class="step21block" style="display:none;">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step211'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Сбор всех документов</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step212'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Получение ГПЗУ</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step213'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Получение и знакомство с правилами поселка или поселения</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step214'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Изыскание на участке (проверка грунта)</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step215'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Изыскание на участке (проверка грунта)</h2>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstep21block" onclick="Showblock('step21block')">
            <i class="fas fa-plus" id="showstep21blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step22'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Согласование внешнего вида, стиля, цвета, материалов</h2>
        </div>
      </div>

      <div class="step22block" style="display:none;">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step221'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Внешние коммуникации и безопасность</h2>
          </div>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstep22block" onclick="Showblock('step22block')">
            <i class="fas fa-plus" id="showstep22blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step23'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Формирование перечня действий согласно бюджету</h2>
        </div>
      </div>

      <div class="step23block" style="display:none;">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step231'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Геологические изыскания и установка точек привязок</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step232'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Перечень зданий и сооружений их этажность и высотность</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step233'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Материалы несущих конструкций</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step234'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Материалы стен и кровли</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step235'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Общие пожелания по инженерным системам и интерьеру</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step236'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Материалы отделки фасада</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step237'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Концепция участка</h2>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstep23block" onclick="Showblock('step23block')">
            <i class="fas fa-plus" id="showstep23blockicon" ></i>
          </span>
        </div>
      </div>

    </div>

    <div class="row mt-2">
      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
        <span class="square text-center" id="showstep2block" onclick="Showblock('step2block')">
          <i class="fas fa-plus" id="showstep2blockicon" ></i>
        </span>
      </div>
    </div>

    <!-- Шаг 2 -->

    <!-- Шаг 3 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='step3'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Шаг 3</h2>
      </div>
    </div>

    <div class="step3block" style="display:none;">
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step31'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Эскизы</h2>
        </div>
      </div>

      <div class="step31block" style="display:none;">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step311'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Эскизный проект благоустройства участка</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step312'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Эскизный план освещения участка</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step313'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Эскизный план отвода воды</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step314'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Эскизный план систем полива</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step315'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Эскизный план строений на участке</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step316'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Виды растений и их расположение</h2>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstep31block" onclick="Showblock('step31block')">
            <i class="fas fa-plus" id="showstep31blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step32'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Планировка</h2>
        </div>
      </div>

      <div class="step32block" style="display:none;">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step321'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Согласование нескольких вариантов планировочных решений</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step322'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Согласование расстановки мебели</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step323'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Согласование количества с.у. и точек привязки сантехники</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step324'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Расчет и согласование мощности котельной и планируемых отопительных решений (доп. камин)</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step325'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Цветовые решения и внешний вид</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step326'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Решение по молнее защите и др. нормам.</h2>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstep32block" onclick="Showblock('step32block')">
            <i class="fas fa-plus" id="showstep32blockicon" ></i>
          </span>
        </div>
      </div>

    </div>

    <div class="row mt-2">
      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
        <span class="square text-center" id="showstep3block" onclick="Showblock('step3block')">
          <i class="fas fa-plus" id="showstep3blockicon" ></i>
        </span>
      </div>
    </div>
    <!-- Шаг 3 -->

    <!-- Шаг 4 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='step4'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Шаг 4</h2>
      </div>
    </div>

    <div class="step4block" style="display:none;">
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step41'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Эскизный проект интерьера</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step42'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Уведомление и получение разрешений на строительство</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step43'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Композитные и цветовые решения</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step44'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Согласование</h2>
        </div>
      </div>

      <div class="step44block" style="display:none;">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step441'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Двери</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step442'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Поверхность стен, потолков, откосов, полов, подоконников и окон</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step443'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Предмет декора (лепнина, элементы декора)</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step444'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Теплые полы и управление</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step445'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Отопительные приборы</h2>
          </div>
        </div>

        <div class="step445block" id='step445block' style="display:none;">
          <div class="row mt-1">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
              <span class="dot5 text-center" id='step4451'></span>
            </div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
              <h2 class="title-white5">Подбор мебели и согласование оборудования</h2>
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right add-list">
            <span class="square text-center" id="showstep445block" onclick="Showblock('step445block')">
              <i class="fas fa-plus" id="showstep445blockicon" ></i>
            </span>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstep44block" onclick="Showblock('step44block')">
            <i class="fas fa-plus" id="showstep44blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step45'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Спецразделы</h2>
        </div>
      </div>

      <div class="step45block" style="display:none;">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step451'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Бассейн</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step452'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Хаммам</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step453'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Камин</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step454'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Умный дом</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step455'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Умный сад</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step456'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Центральный пылесос</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step457'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Интернет и слаботочные системы</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step458'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Снегоочистка и снеготаяние</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step459'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Резервное электроснабжение</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step4510'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Бункера и Подвалы</h2>
          </div>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstep45block" onclick="Showblock('step45block')">
            <i class="fas fa-plus" id="showstep45blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step46'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Рабочий проект</h2>
        </div>
      </div>

      <div class="step46block" style="display:none;">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step461'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Размеры всего</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step462'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Пирог стен потолка кровли и используемая карта материалов</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step463'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Узлы примыканий по всем конструкциям</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step464'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Ведомость остекления</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step465'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Расчёт несущих конструкций</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step466'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Конструктив фундамента</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step467'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Перекрытие</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step468'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Кровля</h2>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstep46block" onclick="Showblock('step46block')">
            <i class="fas fa-plus" id="showstep46blockicon" ></i>
          </span>
        </div>
      </div>

    </div>

    <div class="row mt-2">
      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
        <span class="square text-center" id="showstep4block" onclick="Showblock('step4block')">
          <i class="fas fa-plus" id="showstep4blockicon" ></i>
        </span>
      </div>
    </div>
    <!-- Шаг 4 -->

    <!-- Шаг 5 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='step5'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Шаг 5</h2>
      </div>
    </div>

    <div class="step5block" style="display:none;">
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step51'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Рабочий проект</h2>
        </div>
      </div>

      <div class="step51block" style="display:none;">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step511'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Размеры</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step512'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Спецификация светильников и форнитуры</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step513'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Развертки стен</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step514'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Размеры и конфигурация мебели</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step515'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Ведомость дверей и окон с их открыванием</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step516'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Спецификация подоконников и столешниц</h2>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstep51block" onclick="Showblock('step51block')">
            <i class="fas fa-plus" id="showstep51blockicon" ></i>
          </span>
        </div>
      </div>



      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step52'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Итоговая смета и ее утверждение</h2>
        </div>
      </div>
    </div>

    <div class="row mt-2">
      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
        <span class="square text-center" id="showstep5block" onclick="Showblock('step5block')">
          <i class="fas fa-plus" id="showstep5blockicon" ></i>
        </span>
      </div>
    </div>
    <!-- Шаг 5 -->

    <!-- Шаг 6 -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='step6'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Шаг 6</h2>
      </div>
    </div>

    <div class="step6block" style="display:none;">
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step61'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Создание виртуального дома и согласование</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step62'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Составление конечной сметы</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='step63'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Создание технических проектов</h2>
        </div>
      </div>

      <div class="step63block" style="display:none;">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step631'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Инженерия</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step632'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Фундамент</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step633'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Перекрытие</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='step634'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Кровля и т.п.</h2>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstep63block" onclick="Showblock('step63block')">
            <i class="fas fa-plus" id="showstep63blockicon" ></i>
          </span>
        </div>
      </div>

    </div>


    <div class="row mt-2">
      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
        <span class="square text-center" id="showstep6block" onclick="Showblock('step6block')">
          <i class="fas fa-plus" id="showstep6blockicon" ></i>
        </span>
      </div>
    </div>
    <!-- Шаг 6 -->


    <!-- Дополнительные события -->
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center linelead startblock" style="display:none;" id='stepdop'>
          <i class="fas fa-drafting-compass"></i>
        </span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Дополнительные события</h2>
      </div>
    </div>

    <div class="stepdopblock" style="display:none;">
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stepdop1'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Стиль и расположение световых приборов и их систем управления</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stepdop2'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Дополнительные соглашение</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stepdop3'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Технический дизайн проект</h2>
        </div>
      </div>

      <div class="stepdop3block" style="display:none;">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stepdop31'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Котельная, Отопление, Вентиляция, Водоснабжение, Канализация, Электроснабжение, Кондиционирование, Увлажнение, Ливневая канализация, Система подачи воды на участок, Дренирование, Гидроизоляция, Звукоизоляция, Автоматика</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stepdop32'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Конструкция пожарно-охранных систем, а так же контроль протечек</h2>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstepdop3block" onclick="Showblock('stepdop3block')">
            <i class="fas fa-plus" id="showstepdop3blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stepdop4'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Смета на строительство коробки и согласование бюджета</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stepdop5'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Спецификация мебели</h2>
        </div>
      </div>

    </div>

    <div class="row mt-2">
      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
        <span class="square text-center" id="showstepdopblock" onclick="Showblock('stepdopblock')">
          <i class="fas fa-plus" id="showstepdopblockicon" ></i>
        </span>
      </div>
    </div>

    <!-- Дополнительные события -->

    <div class="row mt-2">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right add-list">
        <span class="square text-center" id="showstartblock" onclick="Showblock('startblock')">
          <i class="fas fa-plus" id="showstartblockicon" ></i>
        </span>
      </div>
    </div>
  </div>


  <!-- Конец Формирование проекта -->

  <!-- Первый этап строительных работ -->
  <div class="row mt-5">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot1 text-center linelead" id="stage1">
          <i class="fas fa-hammer"></i>
        </span>
    </div>
    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
      <h1 class="title-white1">Первый этап строительных работ</h1>
    </div>
  </div>

  <div class="stage1block" style="display:none;" id="stage1block">
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage11'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Строительство основного сооружения</h2>
      </div>
    </div>

    <div class="stage11block" style="display:none;" id="stage11block">
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage111'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Геодезические работы (установка и отбивка всех уровней)</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage112'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Подготовка работ</h2>
        </div>
      </div>

      <div class="stage112block" style="display:none;" id="stage112block">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1121'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Доставка бытовок</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1122'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Доставка био туалетов</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1123'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Доставка воды (на первоначальное время)</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1124'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Временное электроснабжение (подключение и разводка)</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1125'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Формирование площадки для складирования материалов</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1126'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Организация мест для подъезда тяжелой техники</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1127'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Временные ограждения</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1128'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Определение места под будущий вывоз мусора</h2>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstage112block" onclick="Showblock('stage112block')">
            <i class="fas fa-plus" id="showstage112blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage113'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Заказ техники и выравнивание участка</h2>
        </div>
      </div>

      <div class="stage113block" style="display:none;" id="stage113block">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1131'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Формирование рельефа под сооружения</h2>
          </div>
        </div>
      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstage113block" onclick="Showblock('stage113block')">
            <i class="fas fa-plus" id="showstage113blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage114'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Формирование дренажных систем на участке и установка колодцев</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage115'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Подводка электрики на точки зон электроснабжения на участке</h2>
        </div>
      </div>

      <div class="stage115block" style="display:none;" id="stage115block">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1151'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Насосы для откачки сводных вод</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1152'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Септик если есть</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1153'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Дополнительные постройки</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1154'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Распределительный щит освещения улицы</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1155'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Система электродвигателей ворот и подачи напряжения на дверь для электрозамка</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1156'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Слаботочные системы камер</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1157'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Щит системы полива и орашения</h2>
          </div>
        </div>


      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstage115block" onclick="Showblock('stage115block')">
            <i class="fas fa-plus" id="showstage115blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage116'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Организация сетей под фундаментом</h2>
        </div>
      </div>

      <div class="stage115block" style="display:none;" id="stage115block">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1161'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Завод гильз под электричество</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1162'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Завод гильз под слаботочку</h2>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1163'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Устройство отводов канализации</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1164'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Ввод трассы подачи ХВС</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage1165'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Дополнительные резервные вводы</h2>
          </div>
        </div>


      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstage116block" onclick="Showblock('stage116block')">
            <i class="fas fa-plus" id="showstage116blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage117'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Организация и прокладка труб ливневой канализации</h2>
        </div>
      </div>

    </div>

    <div class="row mt-2">
      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
        <span class="square text-center" id="showstage11block" onclick="Showblock('stage11block')">
          <i class="fas fa-plus" id="showstage11blockicon" ></i>
        </span>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage12'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Основные работы</h2>
      </div>
    </div>

    <div class="stage12block" style="display:none;" id="stage12block">
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage121'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Устройство выбранного типа фундамента</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage122'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Устройство и связь фундаментов под крыльцом и террасой</h2>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage123'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Формирование стен и перегородок</h2>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage124'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Установка перекрытия</h2>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage125'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Утепление</h2>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage126'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Гидроизоляция</h2>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage127'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Установка закладных под лестницы</h2>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage128'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Шахты вент каналов и дымоходов</h2>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage129'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Облицовка сооружения</h2>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage1210'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Кровельные работы</h2>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage1211'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Устройство стоков и снего задержания</h2>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage1212'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Прокладка систем подогрева стоков</h2>
        </div>
      </div>


      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage1213'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Фасадные работы</h2>
        </div>
      </div>

    </div>

    <div class="row mt-2">
      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
        <span class="square text-center" id="showstage12block" onclick="Showblock('stage12block')">
          <i class="fas fa-plus" id="showstage12blockicon" ></i>
        </span>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage13'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Установка ограждений</h2>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage14'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Установка дренажных систем по ограждениям</h2>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage15'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Согласование дополнительных работ</h2>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage16'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Процесс газификации или установки газгольдера</h2>
      </div>
    </div>
  </div>

  <div class="row mt-2">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right add-list">
      <span class="square text-center" id="showstage1block" onclick="Showblock('stage1block')">
        <i class="fas fa-plus" id="showstage1blockicon" ></i>
      </span>
    </div>
  </div>
  <!-- Первый этап строительных работ -->

  <!-- Второй этап строительных работ -->
  <div class="row mt-5">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot1 text-center linelead" id="stage2">
          <i class="fas fa-brush"></i>
        </span>
    </div>
    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
      <h1 class="title-white1">Второй этап строительных работ</h1>
      <h2 class="title-white2">(Инженерия и Черновые работы)</h2>
    </div>
  </div>

  <div class="stage2block" style="display:none;" id="stage1block">
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage21'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Утверждение смет и корректировка в случае изменения цен</h2>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage22'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Работы по подключению наружных сетей</h2>
      </div>
    </div>

    <div class="stage22block" style="display:none;" id="stage22block">
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage221'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Подключение воды</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage222'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Подключение канализации</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage223'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Подключение электричества</h2>
        </div>
      </div>

    </div>

    <div class="row mt-2">
      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
        <span class="square text-center" id="showstage22block" onclick="Showblock('stage22block')">
          <i class="fas fa-plus" id="showstage22blockicon" ></i>
        </span>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage23'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Точные замеры окон и дверей</h2>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage24'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Штукатурные работы</h2>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage25'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Остекление после штукатурных работ</h2>
      </div>
    </div>

    <div class="stage25block" style="display:none;" id="stage11block">
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage251'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Нанесение защиты на окна</h2>
        </div>
      </div>

    </div>

    <div class="row mt-2">
      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
        <span class="square text-center" id="showstage25block" onclick="Showblock('stage25block')">
          <i class="fas fa-plus" id="showstage25blockicon" ></i>
        </span>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage26'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Утверждение сметы на черновые работы возможная корректировка</h2>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage27'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Внутренние черновые работы</h2>
      </div>
    </div>

    <div class="stage27block" style="display:none;" id="stage27block">
      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage271'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Подготовка и штукатурка стен</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage272'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Монтаж канализации</h2>
        </div>
      </div>

      <div class="stage272block" style="display:none;" id="stage272block">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2721'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Монтаж трапов и инсталяций</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2722'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Монтаж отвода канализации согласно проектов</h2>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstage272block" onclick="Showblock('stage272block')">
            <i class="fas fa-plus" id="showstage272blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage273'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Монтаж отопления</h2>
        </div>
      </div>

      <div class="stage273block" style="display:none;" id="stage273block">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2731'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Подготовка котельной и систем электричества</h2>
          </div>
        </div>

        <div class="stage2731block" style="display:none;" id="stage2731block">
          <div class="row mt-1">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
              <span class="dot5 text-center" id='stage27311'></span>
            </div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
              <h2 class="title-white5">Устройство сливных и аварийных систем</h2>
            </div>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right add-list">
            <span class="square text-center" id="showstage2731block" onclick="Showblock('stage2731block')">
              <i class="fas fa-plus" id="showstage2731blockicon" ></i>
            </span>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2732'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Прокладка труб отопления в утеплителе</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2733'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Установка розеток для батарей</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2734'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Устройство ниш и мест под крепление отопительных приборов</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2735'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Монтаж коллекторных систем</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2736'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Устройство теплого пола (если не электро)</h2>
          </div>
        </div>

        <div class="stage2736block" style="display:none;" id="stage2736block">
          <div class="row mt-1">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
              <span class="dot5 text-center" id='stage27361'></span>
            </div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
              <h2 class="title-white5">Монтаж шкафов распределения теплого пола</h2>
            </div>
          </div>

          <div class="row mt-1">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
              <span class="dot5 text-center" id='stage27362'></span>
            </div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
              <h2 class="title-white5">Устройство теплого пола</h2>
            </div>
          </div>

          <div class="row mt-1">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
              <span class="dot5 text-center" id='stage27363'></span>
            </div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
              <h2 class="title-white5">Устройство пирога утеплителя для теплого пола</h2>
            </div>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right add-list">
            <span class="square text-center" id="showstage2736block" onclick="Showblock('stage2736block')">
              <i class="fas fa-plus" id="showstage2736blockicon" ></i>
            </span>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2737'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Монтаж электрики для систем отопления и управления</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2738'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Монтаж отопительных приборов (в самый последний момент после всех грязных работ)</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2739'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Установка котла для резерва системы (электрический)</h2>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstage273block" onclick="Showblock('stage273block')">
            <i class="fas fa-plus" id="showstage273blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage274'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Монтаж системы контроля и очистки воды</h2>
        </div>
      </div>

      <div class="stage274block" style="display:none;" id="stage274block">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2741'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Монтаж трапов и инсталяций</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2742'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Монтаж отвода канализации согласно проектов</h2>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstage274block" onclick="Showblock('stage274block')">
            <i class="fas fa-plus" id="showstage274blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage275'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Монтаж систем воздуховодов и вентиляции</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage276'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Работы по черновой электрике</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage277'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Монтаж слаботочных сисем</h2>
        </div>
      </div>

      <div class="stage277block" style="display:none;" id="stage277block">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2771'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Датчики температур</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2772'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Интернет</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2773'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Охрана</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2774'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Датчики протечки</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2775'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Системы видео контродля</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage2776'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Системы полива</h2>
          </div>
        </div>

      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstage277block" onclick="Showblock('stage277block')">
            <i class="fas fa-plus" id="showstage277blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage278'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Монтаж трасс кондиционирования</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage279'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Устройство стяжки пола</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage2710'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Устройство гипсокартонных конструкций</h2>
        </div>
      </div>

    </div>

    <div class="row mt-2">
      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
        <span class="square text-center" id="showstage27block" onclick="Showblock('stage27block')">
          <i class="fas fa-plus" id="showstage27blockicon" ></i>
        </span>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage28'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Фасадные работы</h2>
      </div>
    </div>

    <div class="stage28block" style="display:none;" id="stage28block">
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage281'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Декоротивные элементы</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage282'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Отделка (если не кирпич)</h2>
        </div>
      </div>

    </div>

    <div class="row mt-2">
      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
        <span class="square text-center" id="showstage28block" onclick="Showblock('stage28block')">
          <i class="fas fa-plus" id="showstage28blockicon" ></i>
        </span>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage29'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Запуск всех систем включая газ (если он есть на объекте)</h2>
      </div>
    </div>

    <div class="stage29block" style="display:none;" id="stage29block">
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage291'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Пусконаладка всех систем</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage292'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Тестовый период и настройка</h2>
        </div>
      </div>

    </div>

    <div class="row mt-2">
      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
        <span class="square text-center" id="showstage29block" onclick="Showblock('stage29block')">
          <i class="fas fa-plus" id="showstage29blockicon" ></i>
        </span>
      </div>
    </div>



  </div>

  <div class="row mt-2">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right add-list">
      <span class="square text-center" id="showstage2block" onclick="Showblock('stage2block')">
        <i class="fas fa-plus" id="showstage2blockicon" ></i>
      </span>
    </div>
  </div>
  <!-- Второй этап строительных работ -->

  <!-- Третий этап строительных работ -->
  <div class="row mt-5">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot1 text-center linelead" id="stage3">
          <i class="fas fa-paint-roller"></i>
        </span>
    </div>
    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
      <h1 class="title-white1">Третий этап строительных работ</h1>
      <h2 class="title-white2">(Чистовая отделка и подгонка)</h2>
    </div>
  </div>

  <div class="stage3block" style="display:none;" id="stage3block">
    <div class="row mt-4">
      <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
        <span class="dot2 text-center" id='stage31'></span>
      </div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
        <h2 class="title-white2">Согласование сметы</h2>
      </div>
    </div>

    <div class="stage31block" style="display:none;" id="stage31block">
      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage311'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Чистовые работы</h2>
        </div>
      </div>

      <div class="stage311block" style="display:none;" id="stage311block">
        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage3111'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Финишная отделка потолков и стен</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage3112'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Укладка напольных покрытий</h2>
          </div>
        </div>

        <div class="stage3112block" style="display:none;" id="stage3112block">
          <div class="row mt-1">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
              <span class="dot5 text-center" id='stage31121'></span>
            </div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
              <h2 class="title-white5">Этап 1 - Дерево или Ламинат</h2>
            </div>
          </div>

          <div class="row mt-1">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
              <span class="dot5 text-center" id='stage31122'></span>
            </div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
              <h2 class="title-white5">Этап 2 - Плитка или Камень</h2>
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right add-list">
            <span class="square text-center" id="showstage3112block" onclick="Showblock('stage3112block')">
              <i class="fas fa-plus" id="showstage3112blockicon" ></i>
            </span>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage3113'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Отделка лестницы</h2>
          </div>
        </div>

        <div class="stage3113block" style="display:none;" id="stage3113block">
          <div class="row mt-1">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
              <span class="dot5 text-center" id='stage31131'></span>
            </div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
              <h2 class="title-white5">Установка ограждений</h2>
            </div>
          </div>

        </div>
        <div class="row mt-2">
          <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right add-list">
            <span class="square text-center" id="showstage3113block" onclick="Showblock('stage3113block')">
              <i class="fas fa-plus" id="showstage3113blockicon" ></i>
            </span>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage3114'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Монтаж подоконников и столешниц</h2>
          </div>
        </div>

        <div class="stage3114block" style="display:none;" id="stage3114block">
          <div class="row mt-1">
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
              <span class="dot5 text-center" id='stage31141'></span>
            </div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
              <h2 class="title-white5">Иногда откосов (если они из камня или др. материалов)</h2>
            </div>
          </div>

        </div>
        <div class="row mt-2">
          <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 text-right add-list">
            <span class="square text-center" id="showstage3114block" onclick="Showblock('stage3114block')">
              <i class="fas fa-plus" id="showstage3114blockicon" ></i>
            </span>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage3115'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Монтаж электрофорнитуры</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage3116'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Установка блоков кондиционеров и систем вентиляции</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage3117'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Установка сантехники</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage3118'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Расстановка мебели</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage3119'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Установка дверей</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage31110'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Монтаж плинтуса</h2>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
            <span class="dot4 text-center" id='stage31111'></span>
          </div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <h2 class="title-white4">Работы по подгонке и доделкам</h2>
          </div>
        </div>



      </div>

      <div class="row mt-2">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 text-right add-list">
          <span class="square text-center" id="showstage311block" onclick="Showblock('stage311block')">
            <i class="fas fa-plus" id="showstage311blockicon" ></i>
          </span>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage312'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Благоустройство</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage313'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Отделка Цоколя</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage314'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Отделка Террасы Крылец Наружних ступенией</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage315'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Установка ландшафтного декора</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage316'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Посадка растений</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage317'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Установочные и пуско наладочные работы по системам полива и увлажнения</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage318'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Укладка газонов</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage319'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Настройка датчиков движения и освещения на территории</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage3110'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Настройка света на территории</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage3111'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Обучение клиента для работы с мобильными приложениями и системами контроля доступа</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage3112'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Подача документов на здачу объекта</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage3113'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Подписание Акта приема передачи</h2>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
          <span class="dot3 text-center" id='stage3113'></span>
        </div>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <h2 class="title-white30">Гарантии и обязательства</h2>
        </div>
      </div>

    </div>

    <div class="row mt-2">
      <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 text-right add-list">
        <span class="square text-center" id="showstage31block" onclick="Showblock('stage31block')">
          <i class="fas fa-plus" id="showstage31blockicon" ></i>
        </span>
      </div>
    </div>

  </div>

  <div class="row mt-2">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-right add-list">
      <span class="square text-center" id="showstage3block" onclick="Showblock('stage3block')">
        <i class="fas fa-plus" id="showstage3blockicon" ></i>
      </span>
    </div>
  </div>
<!-- Третий этап строительных работ -->


  <div class="row mt-5">
    <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
      <span class="dot1 text-center linelead" id="end">
        <i class="fas fa-box"></i>
      </span>
    </div>
    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
      <h1 class="title-white1">Финиш</h1>
    </div>
  </div>
</div>
