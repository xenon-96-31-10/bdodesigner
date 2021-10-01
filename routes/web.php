<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\PagesController::class, 'showHome'])->name('mainpage');
Route::get('/portfolio', [App\Http\Controllers\PagesController::class, 'showPortfolio'])->name('portfolio');
Route::get('/price', [App\Http\Controllers\PagesController::class, 'showPrice'])->name('price');
Route::get('/process', [App\Http\Controllers\PagesController::class, 'showProcess'])->name('process');
Route::get('/oprosnik', [App\Http\Controllers\AskController::class, 'showOprosnik'])->name('oprosnik');

Route::post('/oprosnik', [App\Http\Controllers\AskController::class, 'makeOprosnik'])->name('makeoprosnik');

// Этапы
Route::get('/mebel-i-napolneniye', [App\Http\Controllers\PagesController::class, 'showMebel'])->name('stage-mebel');

// Партнеры
Route::get('white-list', [App\Http\Controllers\PagesController::class, 'showWhitePartners'])->name('white-list');

Auth::routes();

Route::group(['middleware' => 'role:admin'], function() {
   Route::get('/lk/admin', [App\Http\Controllers\Dashboards\AdminController::class, 'showIndex'])->name('admin');
   Route::get('/lk/admin/users', [App\Http\Controllers\Dashboards\UsersController::class, 'showUsersList'])->name('admin.users');
   Route::get('/lk/admin/users/create', [App\Http\Controllers\Dashboards\UsersController::class, 'showCreateForm'])->name('admin.users.create');
   Route::post('/lk/admin/users/create', [App\Http\Controllers\Dashboards\UsersController::class, 'create']);
   Route::get('/lk/admin/passes', [App\Http\Controllers\Dashboards\PassController::class, 'showPasses'])->name('admin.passes');
   Route::post('/lk/admin/passes/checkin', [App\Http\Controllers\Dashboards\PassController::class, 'checkIn'])->name('admin.passes.checkin');
   Route::post('/lk/admin/passes/checkout', [App\Http\Controllers\Dashboards\PassController::class, 'checkOut'])->name('admin.passes.checkout');
   Route::get('/lk/admin/passes/create', [App\Http\Controllers\Dashboards\PassController::class, 'showCreateForm'])->name('admin.passes.create');
   Route::post('/lk/admin/passes/create', [App\Http\Controllers\Dashboards\PassController::class, 'create']);
   Route::post('/lk/admin/pass/addcoment', [App\Http\Controllers\Dashboards\PassController::class, 'addComent'])->name('admin.pass.addcoment');
   Route::get('/lk/admin/pass/{id}', [App\Http\Controllers\Dashboards\PassController::class, 'showPass'])->name('admin.pass');
});

Route::post('/api/car', [App\Http\Controllers\Ajax\SearchCarController::class, 'ApiCar'])->name('api.getcar');
Route::post('/api/mechanizm', [App\Http\Controllers\Ajax\SearchCarController::class, 'ApiMechanizm'])->name('api.getmechanizm');
Route::post('/api/human', [App\Http\Controllers\Ajax\SearchCarController::class, 'ApiHuman'])->name('api.gethuman');

Route::group(['middleware' => 'role:owner'], function() {
   Route::get('/lk/owner', [App\Http\Controllers\Dashboards\OwnerController::class, 'showIndex'])->name('owner');
});

Route::group(['middleware' => 'role:guard-post'], function() {
   Route::get('/lk/guard-post/chooseenter', [App\Http\Controllers\Dashboards\GuardPostController::class, 'showChooseEnterForm'])->name('guardpost.chooseenter');
   Route::post('/lk/guard-post/chooseenter', [App\Http\Controllers\Dashboards\GuardPostController::class, 'authEnter']);
   Route::get('/lk/guard-post', [App\Http\Controllers\Dashboards\GuardPostController::class, 'showIndex'])->name('guardpost');
   Route::get('/lk/guard-post/passes', [App\Http\Controllers\Dashboards\PassController::class, 'showPasses'])->name('guardpost.passes');

   Route::get('/lk/guard-post/passes', [App\Http\Controllers\Dashboards\PassController::class, 'showPasses'])->name('guardpost.passes');
   Route::post('/lk/guard-post/passes/checkin', [App\Http\Controllers\Dashboards\PassController::class, 'checkIn'])->name('guardpost.passes.checkin');
   Route::post('/lk/guard-post/passes/checkout', [App\Http\Controllers\Dashboards\PassController::class, 'checkOut'])->name('guardpost.passes.checkout');
   Route::get('/lk/guard-post/passes/create', [App\Http\Controllers\Dashboards\PassController::class, 'showCreateForm'])->name('guardpost.passes.create');
   Route::post('/lk/guard-post/passes/create', [App\Http\Controllers\Dashboards\PassController::class, 'create']);
   Route::post('/lk/guard-post/pass/addcoment', [App\Http\Controllers\Dashboards\PassController::class, 'addComent'])->name('guardpost.pass.addcoment');
   Route::get('/lk/guard-post/pass/{id}', [App\Http\Controllers\Dashboards\PassController::class, 'showPass'])->name('guardpost.pass');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
