document.addEventListener("DOMContentLoaded", function(event) {
  ShowLine = function(){
    var ids = []; // тут массив айди блоков

    $("#proccesslist div.linelead ").each(function(index) {
      if($(this).css('display') !== 'none'){
        ids[index] = $(this).attr('id');
      }else{
        ids[index] = false;
      }
    });
    ids = ids.filter(Boolean);

    var index, len;
    for (index = 0, len = ids.length; index < len-1; ++index) {
        var start = document.getElementById(''+ids[index]+'');
        var end = document.getElementById(''+ids[index+1]+'');
        window['line'+index] = new LeaderLine(start, end);
        window['line'+index].setOptions({
        color:'#4b6132',
        endPlug: 'behind'
        });
    }
  }
  DeleteLine  = function(){
    var ids = []; // тут массив айди блоков

    $("#proccesslist div.linelead ").each(function(index) {
      if($(this).css('display') !== 'none'){
        ids[index] = $(this).attr('id');
      }else{
        ids[index] = false;
      }
    });
    ids = ids.filter(Boolean);

    for (index = 0, len = ids.length; index < len-1; ++index) {
        window['line'+index].remove();
    }
  }
  ShowLine();


  var showblocsid = [];
  var startblockid = ['step1block', 'step2block', 'step3block', 'step4block', 'step5block', 'step6block', 'stepdopblock'];
  var stage1blockid = ['stage11block', 'stage12block'];
  var stage2blockid = ['stage22block', 'stage25block', 'stage27block', 'stage28block', 'stage29block'];
  var stage3blockid = ['stage31block'];
  Showblock = function(id){
    if(showblocsid.includes(id)){
      DeleteLine();

      if(id == 'startblock'){
        var ind, leng;
        for (ind = 0, leng = startblockid.length; ind < leng; ++ind) {
          if(showblocsid.includes(startblockid[ind])){
            $('.'+startblockid[ind]).hide();
            document.getElementById('show'+startblockid[ind]+'icon').style.transform = "rotate(0deg)";
            const index = showblocsid.indexOf(startblockid[ind]);
            if (index > -1) {
              showblocsid.splice(index, 1);
            }
          }
        }
        $('.'+id).hide();
      }else if (id == 'stage1block') {
        var ind, leng;
        for (ind = 0, leng = startblockid.length; ind < leng; ++ind) {
          if(showblocsid.includes(stage1blockid[ind])){
            $('.'+stage1blockid[ind]).hide();
            document.getElementById('show'+stage1blockid[ind]+'icon').style.transform = "rotate(0deg)";
            const index = showblocsid.indexOf(stage1blockid[ind]);
            if (index > -1) {
              showblocsid.splice(index, 1);
            }
          }
        }
        $('.'+id).hide();
      }else if (id == 'stage2block') {
            var ind, leng;
            for (ind = 0, leng = startblockid.length; ind < leng; ++ind) {
              if(showblocsid.includes(stage2blockid[ind])){
                $('.'+stage2blockid[ind]).hide();
                document.getElementById('show'+stage2blockid[ind]+'icon').style.transform = "rotate(0deg)";
                const index = showblocsid.indexOf(stage2blockid[ind]);
                if (index > -1) {
                  showblocsid.splice(index, 1);
                }
              }
            }
            $('.'+id).hide();
          }else if (id == 'stage3block') {
            var ind, leng;
            for (ind = 0, leng = startblockid.length; ind < leng; ++ind) {
              if(showblocsid.includes(stage3blockid[ind])){
                $('.'+stage3blockid[ind]).hide();
                document.getElementById('show'+stage3blockid[ind]+'icon').style.transform = "rotate(0deg)";
                const index = showblocsid.indexOf(stage3blockid[ind]);
                if (index > -1) {
                  showblocsid.splice(index, 1);
                }
              }
            }
            $('.'+id).hide();          
      }else {
        $('.'+id).hide();
      }

      document.getElementById('show'+id+'icon').style.transform = "rotate(0deg)";
      ShowLine();
      const index = showblocsid.indexOf(id);
      if (index > -1) {
        showblocsid.splice(index, 1);
      }
    }else{
      DeleteLine();
      $('.'+id).show();
      document.getElementById('show'+id+'icon').style.transform = "rotate(45deg)";
      ShowLine();
      showblocsid.push(id);
    }
  }

});
