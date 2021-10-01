require('./bootstrap');

window.onload = function () {
  document.body.classList.add('loaded_hiding');
  window.setTimeout(function () {
    document.body.classList.add('loaded');
    document.body.classList.remove('loaded_hiding');
  }, 500);
}

$(document).ready(function () {
  $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  var x=0;
  $(".navbar-toggler").on("click", function () {
    if(x==0){
      document.getElementById("hamburger").style.transform = "rotate(90deg)";
      x++;
    }else{
      document.getElementById("hamburger").style.transform = "rotate(0deg)";
      x=0;
    }
  });

  var div = document.getElementById('stage');
  docfrag = document.createDocumentFragment();


  var products = [];

  function generateProducts (cout) {
      var newArr = [];
      var tagsArr = ['loft', 'дерево','minimal','loft', 'дерево','minimal','loft', 'дерево','minimal','loft', 'дерево','minimal','loft', 'дерево','minimal' ];

      for (var i = 0; i < cout; i++) {
          var tags = tagsArr[i];
          if ((i+1) % 2 == 0) {
            tags = tags + ', реализовано';
          }
          newArr.push({
                  id: 'P'+i
              ,   name: 'Заголовок объекта ' + i
              ,   tags: tags
          });
      }
      return newArr;
  }

  products = generateProducts(15);


  $('#filter a').click(function(e){
      var newPr =[];
      var link = $(this);
      link.addClass('active').siblings().removeClass('active');
      if(link.data('tag') !='всё'){
        var check = new RegExp (link.data('tag'));
        for (var i = 0; i < products.length; i++) {
            e = products[i]; // i объект продукта
            var string = ''+e.tags;
            if(string.match(check)){
              newPr.push({
                      id: e.id
                  ,   name: e.name
                  ,   tags: e.tags
              });
            }
          }
      }else{
        for (var i = 0; i < products.length; i++) {
            e = products[i]; // i объект продукта
            newPr.push({
                    id: e.id
                ,   name: e.name
                ,   tags: e.tags
            });
          }
      }
      document.getElementById('stage').innerHTML = "";
      productsHTML(getProductsListRange(newPr, 0, 4), 0, 4);
      console.log(newPr)
    });
    $('#filter a:first').click();
    //productsHTML(getProductsListRange(products, 0, 4), 0, 4);

    function getProductsListRange (products, from, to) {
      var template = [];
      var e, d;

      if (products.length <= to) { to = products.length;}


      for (var i = from; i < to; i++) {
        e = products[i]; // i объект продукта

        d = document.createElement("div");
        d.className = "col-12 col-sm-6 m-0 mb-2 hue-rotate";
        d.setAttribute('tags', e.tags)
        //div.style.position = "relative";
        //div.style.marginTop = "20px";
        d.innerHTML = '<div class="img-text">'+
        '<img src="storage/images/'+ (Math.floor(Math.random() * (4 - 1)) + 1) +'.jpg" class="img-fluid" alt="Иллюстрация" />'+
        '<span class="bottom-left">'+e.name+'</span>'+
        '</div>';
        template.push(d);
      }


    if (products.length > to) {
        var btn = document.createElement('button');
        btn.className = "btn btn-dark text-center mx-auto";
        btn.innerHTML = 'Показать ещё';
        btn.addEventListener('click', function () {
            productsHTML(getProductsListRange(products, to, to + 4), to, to + 4);
            this.parentElement.removeChild(this);
        });
        template.push(btn);
    }else{
      var dcall = document.createElement("div");
      dcall.className = "col-12 col-sm-6 m-0 mb-2 hue-rotate";
      dcall.innerHTML = '<div class="img-text">'+
      '<img src="storage/images/dcall.jpg" class="img-fluid" alt="Иллюстрация" />'+
      '<h1 class="centered">Ваш Проект</h1>'+
      '<a class="btn btn-custom btn-lg centered" id="btndcall" href="#" role="button" data-toggle="modal" data-target="#ModalForm">Связаться</a>'+
      '</div>';
      template.push(dcall);
      var d = document.createElement("div");
      d.className = "col-12 text-center";
      d.innerHTML = '<button class="btn btn-dark text-center mx-auto disabled">На этом пока все :(</button>';
      template.push(d);
    }

    return template;
  }

  function productsHTML(list, from, to) {
      var listHtml = list;

      function viewProducts (list) {
          for (var i = 0; i < list.length; i++) {
              docfrag.appendChild(list[i]);
          }
          div.appendChild(docfrag);
      }

      viewProducts(listHtml);
  }

  slowScroll = function(id) {
    $("body,html").animate({
      scrollTop:$("#" + id).offset().top
    },1000)
  }

  });
