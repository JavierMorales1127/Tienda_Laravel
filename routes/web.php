<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EjemploController;
use App\http\Controllers\MateriasController;
use App\http\Controllers\Example;

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



Route::get('/inicia','Example@inicio' );
Route::get('/busca','Example@findId' );
Route::get('/buscaNombre','Example@findNombre' );
Route::get('/inserta','Example@insert' );
Route::get('/actualiza','Example@update' );
Route::get('/borrar','Example@delete' );




//MATERIAS
Route::get('/materia','MateriasController@index');


//COMENTARIO

Route::get('inicio','EjemploController@inicio');

Route::get('find','EjemploController@find');

Route::get('nombre','EjemploController@findbyName');

Route::get('registro','EjemploController@registrar');

Route::get('/actualizar','EjemploController@actualiza');

Route::get('/borra','EjemploController@borrar');



