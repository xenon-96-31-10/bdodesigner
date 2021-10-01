<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;
use App\Models\Bio;
use App\Models\Activiti;
use App\Models\Organization;
use App\Models\Project;
use App\Models\TypeOfProject;
use App\Models\Equipment;
use App\Notifications\NewUser;
use Storage;

class AdminController extends Controller
{
  /**
   * method showIndex for show Dashboard
   * @return view Dashboard panel
   */
  public function showIndex(){
    return view('dashboards.admin.index');
  }




}
