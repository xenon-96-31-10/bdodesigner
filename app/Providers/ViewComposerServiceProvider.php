<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Bio;
use App\Models\Role;
use App\Models\TransitoryUser;
use App\Models\TransitoryCar;
use App\Models\Car;
use App\Models\TransitoryMechanizm;
use App\Models\Tax;
use App\Models\Activiti;
use App\Models\Organization;
use App\Models\Project;
use App\Models\TypeOfProject;
use App\Models\Equipment;
use Illuminate\Support\Collection;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeSideBar();
        $this->composeFormToCreateUsers();
        $this->composeFormToCreateEntrance();
        $this->composeFormToAuthorizeEnterOfSeurityPost();
    }

    private function composeSideBar(){
      view()->composer('partials.dashboards.sidebar', function ($view){
        if(isset(auth()->user()->bio)){
          $bio = auth()->user()->bio;
        }else{
          $bio = new Bio();
          $bio->name = 'Новый';
          $bio->lastname = 'пользователь';
        }
        $view->with([
          'role' => auth()->user()->roles()->first()->name,
          'bio' => $bio,
        ]);
      });
    }

    private function composeFormToCreateUsers(){
      view()->composer('partials.dashboards.users.createform', function ($view){
        $view->with([
          'roles' => Role::all(),
          'organizations' => Organization::all(),
          'typeofprojects' => TypeOfProject::all(),
          'projects' => Project::all(),
          'activities' => Activiti::all(),
          'equipments' => Equipment::all(),
        ]);
      });
    }

    private function composeFormToCreateEntrance(){
      view()->composer('partials.dashboards.passes.createform', function ($view){
        $view->with([
          'bios' => Bio::all(),
          't_users' => TransitoryUser::all(),
          't_cars' => TransitoryCar::all(),
          't_mechanizms' => TransitoryMechanizm::all(),
          'taxes' => Tax::all(),
          'cars' => Car::all(),
          'projects' => Project::all(),
        ]);
      });
    }

    private function composeFormToAuthorizeEnterOfSeurityPost(){
      view()->composer('partials.dashboards.guardpost.authenter', function ($view){
        $post = auth()->user()->get_security_post();
        $enters = auth()->user()->get_security_post()->enters;
        $view->with([
          'post' => $post,
          'enters' => $enters,
        ]);
      });
    }
}
