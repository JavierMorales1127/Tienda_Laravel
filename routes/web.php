<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EjemploController;
use App\Ejemplo;

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


Route::get('inicio','EjemploController@inicio');

Route::get('find','EjemploController@find');

Route::get('nombre','EjemploController@findbyName');

Route::get('registro','EjemploController@registrar');

Route::get('actualiza','EjemploController@actualizar');

Route::get('borrar','EjemploController@borrar');




