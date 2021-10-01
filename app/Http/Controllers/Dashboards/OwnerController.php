<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
  /**
   * method showIndex for show Dashboard
   * @return view Dashboard panel
   */
  public function showIndex(){
    return view('dashboards.owner.index');
  }
}
