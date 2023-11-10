<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CaseStudiesController;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[FrontEndController::class,'index'])->name('index');
Route::prefix('company')->name('company.')->group(function () {
    Route::get('/about-us',[FrontEndController::class,'about'])->name('about-us');
    Route::get('/about-us',[FrontEndController::class,'about'])->name('about-us');
    Route::get('/why-sinotrans',[FrontEndController::class,'whySinotrans'])->name('why-sinotrans');
    Route::get('our-strength',[FrontEndController::class,'ourStrength'])->name('our.strength');
});


Route::get('/map',[FrontEndController::class,'mapPak'])->name('map');
Route::get('/contact-us',[FrontEndController::class,'contact'])->name('contact');
Route::post('/contactus',[FrontEndController::class,'contactUs'])->name('contactus');

Route::prefix('services')->name('services.')->group(function () {
    Route::get('/',[ServicesController::class,'services'])->name('all');
    Route::get('/ocean-freight-service',[ServicesController::class,'oceanFreigh'])->name('ocean.freigh');
    Route::get('/ship-agency-service-old',[ServicesController::class,'shipAgency'])->name('ship.agencyOLD');
      Route::get('/ship-agency-service',[ServicesController::class,'shipAgencyV2'])->name('ship.agency');;
    Route::get('/custom-clearance-service',[ServicesController::class,'customClearance'])->name('custom.clearance');
    Route::get('/road-transport-service',[ServicesController::class,'roadTransport'])->name('road.transport');
    Route::get('/warehouse-service',[ServicesController::class,'wareHouse'])->name('ware.house');
});

Route::get('projects',[CaseStudiesController::class,'index'])->name('projects');
Route::get('project/{slug?}',[CaseStudiesController::class,'projectDetail'])->name('project.detail');
Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/',[DashboardController::class,'index'])->name('home');
    Route::get('/projects',[ProjectController::class,'projects'])->name('projects');
    Route::get('/project/create/',[ProjectController::class,'create'])->name('create.project');
    Route::post('/project/store/',[ProjectController::class,'store'])->name('project.store');
    Route::get('/industries',[ProjectController::class,'industries'])->name('industries');

});
