<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HpController;
use App\Http\Controllers\IndicationController;
use App\Http\Controllers\VoltMeterController;
use App\Http\Controllers\AmmeterController;
use App\Http\Controllers\SwitchMakeController;
use App\Http\Controllers\PanelLocationController;
use App\Http\Controllers\PanelColourController;
use App\Http\Controllers\BusbarController;
use App\Http\Controllers\CableEntryController;
use App\Http\Controllers\CableMakeTypeController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\MountingController;
use App\Http\Controllers\PanelTypeController;

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
Route::resource('unit', UnitController::class);
Route::resource('hp', HpController::class);
Route::resource('indication', IndicationController::class);
Route::resource('voltmeter', VoltMeterController::class);
Route::resource('ammeter', AmmeterController::class);
Route::resource('switchmake', SwitchMakeController::class);
Route::resource('panellocation', PanelLocationController::class);
Route::resource('panelcolour', PanelColourController::class);
Route::resource('busbar', BusbarController::class);
Route::resource('cabletype', CableEntryController::class);
Route::resource('cablemaketype', CableMakeTypeController::class);
Route::resource('access', AccessController::class);
Route::resource('mounting', MountingController::class);
Route::resource('paneltype', PanelTypeController::class);



Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);

Route::resource('manufacture', ManufactureController::class);


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

 Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
