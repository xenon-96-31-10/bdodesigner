<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\Models\Inquirer;
use App\Notifications\NewInquirer;
use Illuminate\Support\Facades\Validator;
use \PhpOffice\PhpWord\TemplateProcessor,
    \PhpOffice\PhpWord\Shared\Html,
    \PhpOffice\PhpWord\PhpWord;

class AskController extends Controller
{
  /**
   * [showOprosnik show view]
   * @return view [AskForm]
   */
  public function showOprosnik(){
    return view('oprosnik');
  }

  public function makeOprosnik(Request $request){
    //dd($request->all());
    $data = $request->all();
    $response = AskController::createDoc($data);
    return view('oprosnik', compact('response'));
  }

  protected function createDoc(array $data){
    $inc = new TemplateProcessor(storage_path('app/public/template/inquirer.docx'));
    $inc->setValue('firstname', $data['firstname']);
    $inc->setValue('lastname', $data['lastname']);
    $inc->setValue('phone', $data['phone']);
    $inc->setValue('email', $data['email']);

    if($data['objsq'] != null){
      $inc->setValue('objsq', $data['objsq']);
    }else{
      $inc->setValue('objsq', 'Без информации');
    }

    if($data['objdesc'] != null){
      $inc->setValue('objdesc', $data['objdesc']);
    }else{
      $inc->setValue('objdesc', 'Без информации');
    }

    if($data['objwc'] != null){
      $inc->setValue('objwc', $data['objwc']);
    }else{
      $inc->setValue('objwc', 'Без информации');
    }

    if($data['objflat'] != null){
      $inc->setValue('objflat', $data['objflat']);
    }else{
      $inc->setValue('objflat', 'Без информации');
    }

    if($data['objbedrooms'] != null){
      $inc->setValue('objbedrooms', $data['objbedrooms']);
    }else{
      $inc->setValue('objbedrooms', 'Без информации');
    }

    if(isset($data['objgar'])){
      if($data['objgar'] != null){
        $inc->setValue('objgar', $data['objgar']);
      }else{
        $inc->setValue('objgar', 'Без информации');
      }
    }else{
      $inc->setValue('objgar', 'Нет');
    }

    if($data['objkitchens'] != null){
      $inc->setValue('objkitchens', $data['objkitchens']);
    }else{
      $inc->setValue('objkitchens', 'Без информации');
    }

    if($data['objwishfromclient'] != null){
      $inc->setValue('objwishfromclient', $data['objwishfromclient']);
    }else{
      $inc->setValue('objwishfromclient', 'Без информации');
    }

    if($data['objstyles'] != null){
      $inc->setValue('objstyles', $data['objstyles']);
    }else{
      $inc->setValue('objstyles', 'Без информации');
    }

    if($data['objcars'] != null){
      $inc->setValue('objcars', $data['objcars']);
    }else{
      $inc->setValue('objcars', 'Без информации');
    }

    if($data['objresidents'] != null){
      $inc->setValue('objresidents', $data['objresidents']);
    }else{
      $inc->setValue('objresidents', 'Без информации');
    }

    if(isset($data['objchild'])){
      $inc->setValue('objchild', $data['objchild']);
    }else{
      $inc->setValue('objchild', 'Нет');
    }

    if(isset($data['objwishchild'])){
      $inc->setValue('objwishchild', $data['objwishchild']);
    }else{
      $inc->setValue('objwishchild', 'Нет');
    }

    if(isset($data['objbaby'])){
      $inc->setValue('objbaby', $data['objbaby']);
    }else{
      $inc->setValue('objbaby', 'Нет');
    }

    if(isset($data['objinvalid'])){
      $inc->setValue('objinvalid', $data['objinvalid']);
    }else{
      $inc->setValue('objinvalid', 'Нет');
    }

    if($data['objtypehead'] != null){
      if($data['objtypehead'] == 'Другое'){
        if(isset($data['objtypehead3dr'])){
          if($data['objtypehead3dr'] != null){
            $inc->setValue('objtypehead', $data['objtypehead3dr']);
          }else{
            $inc->setValue('objtypehead', 'Не указано');
          }
        }else{
          $inc->setValue('objtypehead', 'Не указано');
        }

      }else{
        $inc->setValue('objtypehead', $data['objtypehead']);
      }
    }else{
      $inc->setValue('objtypehead', 'Без информации');
    }

    if(isset($data['drkamin'])){
      if(isset($data['drkamintype'])){
        $inc->setValue('drkamin', $data['drkamintype']);
      }else{
        $inc->setValue('drkamin', 'Без уточнения');
      }
    }else{
      $inc->setValue('drkamin', 'Нет');
    }

    if(isset($data['drmusinstr'])){
      $inc->setValue('drmusinstr', $data['drmusinstr']);
    }else{
      $inc->setValue('drmusinstr', 'Нет');
    }

    if(isset($data['drbar'])){
      $inc->setValue('drbar', $data['drbar']);
    }else{
      $inc->setValue('drbar', 'Нет');
    }

    if(isset($data['drspa'])){
      if(isset($data['drspa'])){
        $inc->setValue('drspa', $data['drspatype']);
      }else{
        $inc->setValue('drspa', 'Без уточнения');
      }
    }else{
      $inc->setValue('drspa', 'Нет');
    }

    if(isset($data['drmassage'])){
      $inc->setValue('drmassage', $data['drmassage']);
    }else{
      $inc->setValue('drmassage', 'Нет');
    }

    if(isset($data['drstorageroom'])){
      $inc->setValue('drstorageroom', $data['drstorageroom']);
    }else{
      $inc->setValue('drstorageroom', 'Нет');
    }

    if(isset($data['drguesthall'])){
      $inc->setValue('drguesthall', $data['drguesthall']);
    }else{
      $inc->setValue('drguesthall', 'Нет');
    }

    if(isset($data['drlibrary'])){
      $inc->setValue('drlibrary', $data['drlibrary']);
    }else{
      $inc->setValue('drlibrary', 'Нет');
    }

    if(isset($data['drkino'])){
      $inc->setValue('drkino', $data['drkino']);
    }else{
      $inc->setValue('drkino', 'Нет');
    }

    if($data['drwishes'] != null){
      $inc->setValue('drwishes', $data['drwishes']);
    }else{
      $inc->setValue('drwishes', 'Без информации');
    }

    if(isset($data['drswpool'])){
      $inc->setValue('drswpool', $data['drswpool']);
    }else{
      $inc->setValue('drswpool', 'Нет');
    }

    if(isset($data['drtehdry'])){
      $inc->setValue('drtehdry', $data['drtehdry']);
    }else{
      $inc->setValue('drtehdry', 'Нет');
    }

    if(isset($data['drmaster'])){
      $inc->setValue('drmaster', $data['drmaster']);
    }else{
      $inc->setValue('drmaster', 'Нет');
    }

    if(isset($data['drpersonal'])){
      $inc->setValue('drpersonal', $data['drpersonal']);
    }else{
      $inc->setValue('drpersonal', 'Нет');
    }

    if(isset($data['drgym'])){
      $inc->setValue('drgym', $data['drgym']);
    }else{
      $inc->setValue('drgym', 'Нет');
    }

    if(isset($data['drplayr'])){
      $inc->setValue('drplayr', $data['drplayr']);
    }else{
      $inc->setValue('drplayr', 'Нет');
    }

    if(isset($data['drbilyard'])){
      $inc->setValue('drbilyard', $data['drbilyard']);
    }else{
      $inc->setValue('drbilyard', 'Нет');
    }

    $inc->setValue('ftypeofhand', $data['ftypeofhand']);

    if($data['fbioritms'] != null){
      $inc->setValue('fbioritms', $data['fbioritms']);
    }else{
      $inc->setValue('fbioritms', 'Без информации');
    }

    if(isset($data['fplace1'])){
      $inc->setValue('fplace1', $data['fplace1']);
    }else{
      $inc->setValue('fplace1', 'Нет');
    }

    if(isset($data['fplace2'])){
      $inc->setValue('fplace2', $data['fplace2']);
    }else{
      $inc->setValue('fplace2', 'Нет');
    }

    if(isset($data['fplace3'])){
      $inc->setValue('fplace3', $data['fplace3']);
    }else{
      $inc->setValue('fplace3', 'Нет');
    }

    if(isset($data['fplace4'])){
      $inc->setValue('fplace4', $data['fplace4']);
    }else{
      $inc->setValue('fplace4', 'Нет');
    }

    if(isset($data['fplace5'])){
      if(isset($data['fplace5dr'])){
        if($data['fplace5dr'] != null){
        $inc->setValue('fplace5dr', $data['fplace5dr']);
        }else{
          $inc->setValue('fplace5dr', 'Не указано');
        }
      }else{
        $inc->setValue('fplace5dr', 'Не указано');
      }
    }else{
      $inc->setValue('fplace5dr', 'Не указано');
    }

    if($data['ffavcolors'] != null){
      $inc->setValue('ffavcolors', $data['ffavcolors']);
    }else{
      $inc->setValue('ffavcolors', 'Без информации');
    }

    if($data['fallergic'] != null){
      $inc->setValue('fallergic', $data['fallergic']);
    }else{
      $inc->setValue('fallergic', 'Без информации');
    }

    if($data['feye'] != null){
      $inc->setValue('feye', $data['feye']);
    }else{
      $inc->setValue('feye', 'Без информации');
    }

    if($data['fhobby'] != null){
      $inc->setValue('fhobby', $data['fhobby']);
    }else{
      $inc->setValue('fhobby', 'Без информации');
    }

    if($data['flike'] != null){
      $inc->setValue('flike', $data['flike']);
    }else{
      $inc->setValue('flike', 'Без информации');
    }

    if($data['fdislike'] != null){
      $inc->setValue('fdislike', $data['fdislike']);
    }else{
      $inc->setValue('fdislike', 'Без информации');
    }

    $inc->setValue('fguest', $data['fguest']);

    if(isset($data['ffamily'])){
      if(isset($data['ffamilyconst'])){
        $inc->setValue('ffamilyconst', $data['ffamilyconst']);
      }else{
        $inc->setValue('ffamilyconst', 'Без информации');
      }
      if($data['fmemberfamily'] != null){
        $inc->setValue('fmemberfamily', $data['fmemberfamily']);
      }else{
        $inc->setValue('fmemberfamily', 'Нет');
      }
    }else{
      $inc->setValue('ffamilyconst', 'Без информации');
      $inc->setValue('fmemberfamily', 'Нет');
    }

    if(isset($data['fhomepet'])){
      if($data['fmemberhomepet'] != null){
        $inc->setValue('fmemberhomepet', $data['fmemberhomepet']);
      }else{
        $inc->setValue('fmemberhomepet', 'Без информации');
      }

      if($data['ftypehomepet'] != null){
        $inc->setValue('ftypehomepet', $data['ftypehomepet']);
      }else{
        $inc->setValue('ftypehomepet', 'Без постоянного проживания');
      }

    }else{
      $inc->setValue('fmemberhomepet', 'Без информации');
      $inc->setValue('ftypehomepet', 'Без информации');
    }

    if(isset($data['fstreetpet'])){
      if($data['fmemberstreetpet'] != null){
        $inc->setValue('fmemberstreetpet', $data['fmemberstreetpet']);
      }else{
        $inc->setValue('fmemberstreetpet', 'Без информации');
      }

      if($data['ftypestreetpet'] != null){
        $inc->setValue('ftypestreetpet', $data['ftypestreetpet']);
      }else{
        $inc->setValue('ftypestreetpet', 'Без информации');
      }

    }else{
      $inc->setValue('fmemberstreetpet', 'Без информации');
      $inc->setValue('ftypestreetpet', 'Без информации');
    }

    if($data['fconcept'] != null){
      $inc->setValue('fconcept', $data['fconcept']);
    }else{
      $inc->setValue('fconcept', 'Без информации');
    }

    if($data['ffetuaresobj'] != null){
      $inc->setValue('ffetuaresobj', $data['ffetuaresobj']);
    }else{
      $inc->setValue('ffetuaresobj', 'Без информации');
    }

    $inc->setValue('fhifi', $data['fhifi']);

    if(isset($data['finternet'])){
      $inc->setValue('finternet', $data['finternet']);
    }else{
      $inc->setValue('finternet', 'Нет');
    }

    if(isset($data['finternettv'])){
      $inc->setValue('finternettv', $data['finternettv']);
    }else{
      $inc->setValue('finternettv', 'Нет');
    }

    if(isset($data['fvideo'])){
      $inc->setValue('fvideo', $data['fvideo']);
    }else{
      $inc->setValue('fvideo', 'Нет');
    }

    if(isset($data['fscud'])){
      $inc->setValue('fscud', $data['fscud']);
    }else{
      $inc->setValue('fscud', 'Нет');
    }

    if(isset($data['fupr'])){
      $fupr = "Да";
      if((isset($data['fuprdom']))&&($data['fuprdom'] != null)){
        $fupr .= " | ";
        $fupr .= $data['fuprdom'];
      }
      $inc->setValue('fupr', $fupr);
    }else{
      $inc->setValue('fupr', 'Нет');
    }

    if(isset($data['hallkey'])){
      $inc->setValue('hallkey', $data['hallkey']);
    }else{
      $inc->setValue('hallkey', 'Нет');
    }

    if(isset($data['hallshoes'])){
      $inc->setValue('hallshoes', $data['hallshoes']);
    }else{
      $inc->setValue('hallshoes', 'Нет');
    }

    if(isset($data['hallveshalka'])){
      $inc->setValue('hallveshalka', $data['hallveshalka']);
    }else{
      $inc->setValue('hallveshalka', 'Нет');
    }

    if(isset($data['hallcupboard'])){
      $inc->setValue('hallcupboard', $data['hallcupboard']);
    }else{
      $inc->setValue('hallcupboard', 'Нет');
    }

    if(isset($data['hallmirrors'])){
      $inc->setValue('hallmirrors', $data['hallmirrors']);
    }else{
      $inc->setValue('hallmirrors', 'Нет');
    }

    if(isset($data['halldomofon'])){
      $inc->setValue('halldomofon', $data['halldomofon']);
    }else{
      $inc->setValue('halldomofon', 'Нет');
    }

    if(isset($data['hallwattercom'])){
      $inc->setValue('hallwattercom', $data['hallwattercom']);
    }else{
      $inc->setValue('hallwattercom', 'Нет');
    }

    if(isset($data['hallhotflat'])){
      $inc->setValue('hallhotflat', $data['hallhotflat']);
    }else{
      $inc->setValue('hallhotflat', 'Нет');
    }

    if(isset($data['hallhotflatv'])){
      $inc->setValue('hallhotflatv', $data['hallhotflatv']);
    }else{
      $inc->setValue('hallhotflatv', 'Нет');
    }

    if(isset($data['hallsecurity'])){
      $inc->setValue('hallsecurity', $data['hallsecurity']);
    }else{
      $inc->setValue('hallsecurity', 'Нет');
    }

    if(isset($data['hallsmarthome'])){
      $inc->setValue('hallsmarthome', $data['hallsmarthome']);
    }else{
      $inc->setValue('hallsmarthome', 'Нет');
    }

    if(isset($data['hallsystemforshoes'])){
      $inc->setValue('hallshoes', $data['hallshoes']);
    }else{
      $inc->setValue('hallshoes', 'Нет');
    }

    if($data['hallwishes'] != null){
      $inc->setValue('hallwishes', $data['hallwishes']);
    }else{
      $inc->setValue('hallwishes', 'Без информации');
    }

    if(isset($data['hallcomments'])){
      if($data['hallcomments'] != null){
        $inc->setValue('hallcomments', $data['hallcomments']);
      }else{
        $inc->setValue('hallcomments', 'Без информации');
      }
    }else{
      $inc->setValue('hallcomments', 'Без информации');
    }

    if($data['kcooker'] != null){
      $inc->setValue('kcooker', $data['kcooker']);
    }else{
      $inc->setValue('kcooker', 'Без информации');
    }

    if($data['ktimeofcook'] != null){
      $inc->setValue('ktimeofcook', $data['ktimeofcook']);
    }else{
      $inc->setValue('ktimeofcook', 'Без информации');
    }

    if(isset($data['kforsheff'])){
      $inc->setValue('kforsheff', $data['kforsheff']);
    }else{
      $inc->setValue('kforsheff', 'Нет');
    }

    if(isset($data['kmini'])){
      $inc->setValue('kmini', $data['kmini']);
    }else{
      $inc->setValue('kmini', 'Нет');
    }

    if(isset($data['kbyustorage'])){
      $inc->setValue('kbyustorage', $data['kbyustorage']);
      if(isset($data['kbyustoragedop'])){
        if($data['kbyustoragedop'] != null){
          $inc->setValue('kbyustoragedop', $data['kbyustoragedop']);
        }else{
          $inc->setValue('kbyustoragedop', 'Без информации');
        }
      }else{
        $inc->setValue('kbyustoragedop', 'Без информации');
      }
    }else{
      $inc->setValue('kbyustorage', 'Нет');
      $inc->setValue('kbyustoragedop', 'Без информации');
    }

    if(isset($data['kwinterstocks'])){
      $inc->setValue('kwinterstocks', $data['kwinterstocks']);
      if(isset($data['kwinterstocksdop'])){
        if($data['kwinterstocksdop'] != null){
          $inc->setValue('kwinterstocksdop', $data['kwinterstocksdop']);
        }else{
          $inc->setValue('kwinterstocksdop', 'Без информации');
        }
      }else{
        $inc->setValue('kwinterstocksdop', 'Без информации');
      }
    }else{
      $inc->setValue('kwinterstocks', 'Нет');
      $inc->setValue('kwinterstocksdop', 'Без информации');
    }

    if(isset($data['kfreeze'])){
      $inc->setValue('kfreeze', $data['kfreeze']);
    }else{
      $inc->setValue('kfreeze', 'Нет');
    }

    if($data['kplita']=='Газовые (плита, духовка) приборы'){
      $inc->setValue('kplita', $data['kplita']);
    }else{
      $kplita = $data['kplita'];
      if(isset($data['kmodelelplita'])){
        $kplita .= ' | ';
        $kplita .= $data['kmodelelplita'];
      }
      if(isset($data['koven'])){
        $kplita .= ' | ';
        $inc->setValue('koven', $data['koven']);
      }
      $inc->setValue('kplita', $kplita);
    }

    if(isset($data['kwaveoven'])){
      $inc->setValue('kwaveoven', $data['kwaveoven']);
    }else{
      $inc->setValue('kwaveoven', 'Нет');
    }

    if(isset($data['kcofemachine'])){
      $inc->setValue('kcofemachine', $data['kcofemachine']);
    }else{
      $inc->setValue('kcofemachine', 'Нет');
    }

    if(isset($data['ksushkaposud'])){
      $inc->setValue('ksushkaposud', $data['ksushkaposud']);
    }else{
      $inc->setValue('ksushkaposud', 'Нет');
    }

    if(isset($data['kmoika'])){
      $inc->setValue('kmoika', $data['kmoika']);
    }else{
      $inc->setValue('kmoika', 'Нет');
    }

    if(isset($data['kkranmoika'])){
      $inc->setValue('kkranmoika', $data['kkranmoika']);
    }else{
      $inc->setValue('kkranmoika', 'Нет');
    }

    if(isset($data['kwashmachine'])){
      $inc->setValue('kwashmachine', $data['kwashmachine']);
    }else{
      $inc->setValue('kwashmachine', 'Нет');
    }

    if(isset($data['kfreezemachine'])){
      $inc->setValue('kfreezemachine', $data['kfreezemachine']);
    }else{
      $inc->setValue('kfreezemachine', 'Нет');
    }

    if(isset($data['kfreezestorage'])){
      $inc->setValue('kfreezestorage', $data['kfreezestorage']);
    }else{
      $inc->setValue('kfreezestorage', 'Нет');
    }

    if(isset($data['kstorageforposuda'])){
      $inc->setValue('kstorageforposuda', $data['kstorageforposuda']);
    }else{
      $inc->setValue('kstorageforposuda', 'Нет');
    }

    if(isset($data['ktoster'])){
      $inc->setValue('ktoster', $data['ktoster']);
    }else{
      $inc->setValue('ktoster', 'Нет');
    }

    if(isset($data['kblender'])){
      $inc->setValue('kblender', $data['kblender']);
    }else{
      $inc->setValue('kblender', 'Нет');
    }

    if(isset($data['kmultivarki'])){
      $inc->setValue('kmultivarki', $data['kmultivarki']);
    }else{
      $inc->setValue('kmultivarki', 'Нет');
    }

    if(isset($data['kbigtahnika'])){
      $inc->setValue('kbigtahnika', $data['kbigtahnika']);
    }else{
      $inc->setValue('kbigtahnika', 'Нет');
    }

    if(isset($data['kswitchtrash'])){
      $inc->setValue('kswitchtrash', $data['kswitchtrash']);
    }else{
      $inc->setValue('kswitchtrash', 'Нет');
    }

    if(isset($data['kstorageforvegetable'])){
      $inc->setValue('kstorageforvegetable', $data['kstorageforvegetable']);
    }else{
      $inc->setValue('kstorageforvegetable', 'Нет');
    }

    if(isset($data['kstorageforfruits'])){
      $inc->setValue('kstorageforfruits', $data['kstorageforfruits']);
    }else{
      $inc->setValue('kstorageforfruits', 'Нет');
    }

    if(isset($data['kvityzhki'])){
      $kvityzhki = 'Да ';
      if(isset($data['kvityzhkaplita'])){
        $kvityzhki .= ' | ';
        $kvityzhki .= $data['kvityzhkaplita'];
      }
      if(isset($data['kvityzhkaisl'])){
        $kvityzhki .= ' | ';
        $kvityzhki .= $data['kvityzhkaisl'];
      }
      if(isset($data['kvityzhkapom'])){
        $kvityzhki .= ' | ';
        $kvityzhki .= $data['kvityzhkapom'];
      }
      $inc->setValue('kvityzhki', $kvityzhki);
    }else{
      $inc->setValue('kvityzhki', 'Нет');
    }

    if($data['kmaterialtable'] != null){
      $inc->setValue('kmaterialtable', $data['kmaterialtable']);
    }else{
      $inc->setValue('kmaterialtable', 'Без информации');
    }

    if($data['kmaterialfacade'] != null){
      $inc->setValue('kmaterialfacade', $data['kmaterialfacade']);
    }else{
      $inc->setValue('kmaterialfacade', 'Без информации');
    }

    if(isset($data['kostrov'])){
      if(isset($data['kostrovplits'])){
        $kostrov = $data['kostrovplita'];
      }
      if(isset($data['kostrovwash'])){
        $kostrov .= ' | ';
        $kostrov .= $data['kostrovwash'];
      }else{
        if(!isset($data['kostrovplits'])){
          $kostrov = 'Нет';
        }
      }
      $inc->setValue('kostrov', $kostrov);
    }else{
      $inc->setValue('kostrov', 'Нет');
    }

    if(isset($data['ksystemwaterprepare'])){
      $inc->setValue('ksystemwaterprepare', $data['ksystemwaterprepare']);
    }else{
      $inc->setValue('ksystemwaterprepare', 'Нет');
    }

    if(isset($data['kkranaroundplita'])){
      $inc->setValue('kkranaroundplita', $data['kkranaroundplita']);
    }else{
      $inc->setValue('kkranaroundplita', 'Нет');
    }

    if(isset($data['klightzone'])){
      if(isset($data['klightzonedop'])){
        if($data['klightzonedop'] != null){
          $inc->setValue('klightzone', $data['klightzonedop']);
        }else{
          $inc->setValue('klightzone', $data['klightzone']);
        }
      }else{
        $inc->setValue('klightzone', $data['klightzone']);
      }
    }else{
      $inc->setValue('klightzone', 'Нет');
    }

    $inc->setValue('hbrkrovati', $data['hbrkrovati']);

    if($data['hbrrazmerkrovati'] != null){
      if($data['hbrrazmerkrovati'] == "Другой"){
        if($data['hbrrazmerkrovatidr'] != null){
          $inc->setValue('hbrrazmerkrovati', $data['hbrrazmerkrovatidr']);
        }else{
          $inc->setValue('hbrrazmerkrovati', "Другой без уточнения размера");
        }
      }else{
        $inc->setValue('hbrrazmerkrovati', $data['hbrrazmerkrovati']);
      }
    }else{
      $inc->setValue('hbrrazmerkrovati', 'Без информации');
    }

    if(isset($data['hbrsystemuprzvukom'])){
      $inc->setValue('hbrsystemuprzvukom', $data['hbrsystemuprzvukom']);
    }else{
      $inc->setValue('hbrsystemuprzvukom', 'Нет');
    }

    if(isset($data['hbrsystemuprsvetom'])){
      $inc->setValue('hbrsystemuprsvetom', $data['hbrsystemuprsvetom']);
    }else{
      $inc->setValue('hbrsystemuprsvetom', 'Нет');
    }

    if(isset($data['hbrsystemuprklimatom'])){
      $inc->setValue('hbrsystemuprklimatom', $data['hbrsystemuprklimatom']);
    }else{
      $inc->setValue('hbrsystemuprklimatom', 'Нет');
    }

    if($data['hbribjaroundbed'] != null){
      $inc->setValue('hbribjaroundbed', $data['hbribjaroundbed']);
    }else{
      $inc->setValue('hbribjaroundbed', 'Без информации');
    }

    if(isset($data['hbrsvetforread'])){
      $inc->setValue('hbrsvetforread', $data['hbrsvetforread']);
    }else{
      $inc->setValue('hbrsvetforread', 'Нет');
    }

    if(isset($data['hbrspecmachine'])){

      if(isset($data['hbrspecmachine1'])){
        $hbrspecmachine = $data['hbrspecmachine1'];
      }
      if(isset($data['hbrspecmachine2'])){
        $hbrspecmachine = ' | ';
        $hbrspecmachine .= $data['hbrspecmachine2'];
      }else{
        if(!isset($data['hbrspecmachine1'])){
          $hbrspecmachine = 'Да, без уточнения';
        }
      }
      $inc->setValue('hbrspecmachine', $hbrspecmachine);
    }else{
      $inc->setValue('hbrspecmachine', 'Нет');
    }

    if(isset($data['hbrgarderob'])){
      $inc->setValue('hbrgarderob', $data['hbrgarderob']);
    }else{
      $inc->setValue('hbrgarderob', 'Нет');
    }

    if(isset($data['hbrsu'])){
      $hbrsu = 'Да';
      if(isset($data['hbrdush'])){
        $hbrsu .= ' | ';
        $hbrsu .= $data['hbrdush'];
      }
      if(isset($data['hbrvanna'])){
        $hbrsu .= ' | ';
        $hbrsu .= $data['hbrvanna'];
      }
      if(isset($data['hbrrakovina'])){
        $hbrsu .= ' | ';
        $hbrsu .= $data['hbrrakovina'];
      }
      if(isset($data['hbrwc'])){
        $hbrsu .= ' | ';
        $hbrsu .= $data['hbrwc'];
      }
      if(isset($data['hbrsmartwc'])){
        $hbrsu .= ' | ';
        $hbrsu .= $data['hbrsmartwc'];
      }
      if(isset($data['hbrgigiendush'])){
        $hbrsu .= ' | ';
        $hbrsu .= $data['hbrgigiendush'];
      }
      if(isset($data['hbrsugigiendush'])){
        $hbrsu .= ' | ';
        $hbrsu .= $data['hbrsugigiendush'];
      }
      if(isset($data['hbrsudr'])){
        $hbrsu .= ' | ';
        $hbrsu .= $data['hbrsudrtext'];
      }
      $inc->setValue('hbrsu', $hbrsu);
    }else{
      $inc->setValue('hbrsu', 'Нет');
    }

    if(isset($data['hbrcabinetinbedroom'])){
      $inc->setValue('hbrcabinetinbedroom', $data['hbrcabinetinbedroom']);
    }else{
      $inc->setValue('hbrcabinetinbedroom', 'Нет');
    }

    if(isset($data['hbrtouilettable'])){
      $inc->setValue('hbrtouilettable', $data['hbrtouilettable']);
    }else{
      $inc->setValue('hbrtouilettable', 'Нет');
    }

    if(isset($data['hbrtouilettable'])){
      $inc->setValue('hbrtouilettable', $data['hbrtouilettable']);
    }else{
      $inc->setValue('hbrtouilettable', 'Нет');
    }

    if(isset($data['hbrsystemstoragepolotenec'])){
      $inc->setValue('hbrsystemstoragepolotenec', $data['hbrsystemstoragepolotenec']);
    }else{
      $inc->setValue('hbrsystemstoragepolotenec', 'Нет');
    }

    if(isset($data['hbrsystemwashnizbel'])){
      $inc->setValue('hbrsystemwashnizbel', $data['hbrsystemwashnizbel']);
    }else{
      $inc->setValue('hbrsystemwashnizbel', 'Нет');
    }

    if(isset($data['hbrsystemsushki'])){
      $inc->setValue('hbrsystemsushki', $data['hbrsystemsushki']);
    }else{
      $inc->setValue('hbrsystemsushki', 'Нет');
    }

    if(isset($data['hbrtv'])){
      if(isset($data['hbrtvrazmer'])){
        if(($data['hbrtvrazmer'] != null)){
          $inc->setValue('hbrtv', $data['hbrtvrazmer']);
        }else{
          $inc->setValue('hbrtv', $data['hbrtv']);
        }
      }else{
        $inc->setValue('hbrtv', $data['hbrtv']);
      }
    }else{
      $inc->setValue('hbrtv', 'Нет');
    }

    if(isset($data['hbrproector'])){
      $inc->setValue('hbrproector', $data['hbrproector']);
    }else{
      $inc->setValue('hbrproector', 'Нет');
    }

    if(isset($data['hbrpigams'])){
      $inc->setValue('hbrpigams', $data['hbrpigams']);
    }else{
      $inc->setValue('hbrpigams', 'Нет');
    }

    if(isset($data['hbruvlazh'])){
      $inc->setValue('hbruvlazh', $data['hbruvlazh']);
    }else{
      $inc->setValue('hbruvlazh', 'Нет');
    }

    if(isset($data['hbrfreshair'])){
      $inc->setValue('hbrfreshair', $data['hbrfreshair']);
    }else{
      $inc->setValue('hbrfreshair', 'Нет');
    }

    if(isset($data['hbrsplitsys'])){
      $inc->setValue('hbrsplitsys', $data['hbrsplitsys']);
    }else{
      $inc->setValue('hbrsplitsys', 'Нет');
    }

    if(isset($data['hbrhifi'])){
      $inc->setValue('hbrhifi', $data['hbrhifi']);
    }else{
      $inc->setValue('hbrhifi', 'Нет');
    }

    if(isset($data['sbrcreplforwc'])){
      $inc->setValue('sbrcreplforwc', $data['sbrcreplforwc']);
    }else{
      $inc->setValue('sbrcreplforwc', 'Нет');
    }

    if(isset($data['sbrelevatorforcataloc'])){
      $inc->setValue('sbrelevatorforcataloc', $data['sbrelevatorforcataloc']);
    }else{
      $inc->setValue('sbrelevatorforcataloc', 'Нет');
    }

    if(isset($data['sbrsystemup'])){
      $inc->setValue('sbrsystemup', $data['sbrsystemup']);
    }else{
      $inc->setValue('sbrsystemup', 'Нет');
    }

    if($data['sbrdrugoe'] != null){
      $inc->setValue('sbrdrugoe', $data['sbrdrugoe']);
    }else{
      $inc->setValue('sbrdrugoe', 'Без информации');
    }

    if($data['sbrwishes'] != null){
      $inc->setValue('sbrwishes', $data['sbrwishes']);
    }else{
      $inc->setValue('sbrwishes', 'Без информации');
    }

    if($data['objgar'] != null){
      $count = $data['objgar'];
      $descgar = "";
      for($i = 1; $i <= $count; $i++){
        $descgar .= "Гардеробная ". $i .": ";
        if(isset($data['gar'.$i.''])){
          if($data['gar'.$i.''] != null){
            $descgar .= $data['gar'.$i.''];
          }else{
            $descgar .= 'Без информации';
          }
        }else{
          $descgar .= 'Без информации';
        }
        $descgar .= " | ";
      }
      $inc->setValue('descgar', $descgar);
    }else{
      $inc->setValue('descgar', 'Без информации');
    }

    if(isset($data['guvlsush'])){
      $inc->setValue('guvlsush', $data['guvlsush']);
    }else{
      $inc->setValue('guvlsush', 'Нет');
    }

    if(isset($data['gdelpyl'])){
      $inc->setValue('gdelpyl', $data['gdelpyl']);
    }else{
      $inc->setValue('gdelpyl', 'Нет');
    }

    if(isset($data['gglazhka'])){
      $inc->setValue('gglazhka', $data['gglazhka']);
    }else{
      $inc->setValue('gglazhka', 'Нет');
    }

    if(isset($data['gclean'])){
      $inc->setValue('gclean', $data['gclean']);
    }else{
      $inc->setValue('gclean', 'Нет');
    }

    $inoe = "";
    for($i = 0; $i <= 9; $i++){
      if(isset($data['inoe'.$i.''])){
        if($data['inoe'.$i.''] != null){
          $inoe .= $data['inoe'.$i.''];
        }else{
          $inoe .= 'Без информации';
        }
        $inoe .= " | ";
      }
    }
    if($inoe != ""){
      $inc->setValue('inoe', $inoe);
    }else{
      $inc->setValue('inoe', 'Без информации');
    }

    $dop = "";
    for($i = 0; $i <= 9; $i++){
      if(isset($data['dop'.$i.''])){

        if($data['dop'.$i.''] != null){
          $dop .= $data['dop'.$i.''];
        }else{
          $dop .= 'Без информации';
        }
        $dop .= " | ";
      }
    }
    if($dop != ""){
      $inc->setValue('dop', $dop);
    }else{
      $inc->setValue('dop', 'Без информации');
    }


    $fio = $data['firstname'];
    $fio .= " ";
    $fio .= $data['lastname'];
    //dd($data['objfiles'][0]);
    $inq = new Inquirer();
    $inq->inquirer = 'Опрос заполнен';
    $inq->fio = $fio;
    $inq->phone = $data['phone'];
    $inq->email = $data['email'];
    if(isset($data['objfiles'])){
      $inq->files = 'Есть';
    }else{
      $inq->files = 'Нет';
    }
    $inq->save();


    $id = $inq->id;
    $phone = $data['phone'];
    Storage::makeDirectory('public/inquirers/');
    Storage::makeDirectory('public/inquirers/'.$id.'/');
    $inc->saveAs(storage_path('app/public/inquirers/'.$id.'/inquirer.docx'));
    if(isset($data['objfiles'])){
      Storage::makeDirectory('public/inquirers/'.$id.'/styles');
      foreach ($data['objfiles'] as $file) {
        $filename = $file->getClientOriginalName();
        //$filename .= $file->getClientOriginalExtension();
        $path = Storage::putFileAs('public/inquirers/'.$id.'/styles' , $file, $filename);
      }
    }

    $inq->notify(new NewInquirer($id, $fio, $phone));
    return 'Спасибо большое за ответы на вопросы, Ваша информация будет обработана и мы скоро свяжемся с Вами!';
  }

}
