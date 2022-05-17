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
    return view('welcome');
});


Route::get('/inicio','Example@inicio' );
Route::get('/busca','Example@findId' );
Route::get('/buscaNombre','Example@findNombre' );
Route::get('/inserta','Example@insert' );
Route::get('/actualiza','Example@update' );
Route::get('/borrar','Example@delete' );




//COMENTARIO



