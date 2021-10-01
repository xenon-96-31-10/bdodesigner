<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  /**
   * This is function to show main page
   * @return view template of main page
   */
  public function showHome(){
    return view('welcome');
  }

  /**
   * This is function to show portfolio
   * @return view template of portfolio
   */
  public function showPortfolio(){
    return view('portfolio');
  }

  /**
   * This is function to show price
   * @return view template of price
   */
  public function showPrice(){
    return view('price');
  }

  /**
   * This is function to show process
   * @return view template of process
   */
  public function showProcess(){
    return view('process');
  }

  /**
   * This is function to show stage.mebel
   * @return view template of stage.mebel
   */
  public function showMebel(){
    return view('stage.mebel');
  }

  /**
   * This is function to show partners.white
   * @return view template of partners.white
   */
  public function showWhitePartners(){
    return view('partners.white');
  }

}
