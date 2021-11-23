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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::put('user/{user}/subscripcion','UserController@subscripcion')->name('user.subscripcion'); 

Route::resource('user', UserController::class);
Route::resource('ets', EtController::class);
Route::resource('municipios', MunicipioController::class);
Route::resource('pdes', PdesController::class);
Route::resource('reportes', ReporteController::class);

Route::get('/exportExcel', 'ReporteController@export')->name('exportExcel');;