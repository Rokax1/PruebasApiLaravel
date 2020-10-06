<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeandroController;
use App\Http\Controllers\FelipeController;


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
    return view('welcome');
});


Route::resource('api/EjemploLeandro',LeandroController::class);
Route::resource('api/EjemploFelipe',FelipeController::class);



//nuevo
