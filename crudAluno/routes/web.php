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


Route::get('/', 'CursoController@index');
Route::get('/curso/criar', 'CursoController@create');
Route::post('/curso/criar', 'CursoController@store');

Route::post('/curso/remover/{id}', 'CursoController@destroy');

Route::get('/curso/update/{id}', 'CursoController@update');
Route::post('/curso/atualizar/{id}', 'CursoController@atualizar');


Route::get('/instrutor', 'InstrutorController@index');
Route::get('/instrutor/criar', 'InstrutorController@create');
Route::post('/instrutor/criar', 'InstrutorController@store');

Route::post('/instrutor/remover/{id}', 'InstrutorController@destroy');

Route::get('/instrutor/update/{id}', 'InstrutorController@update');
Route::post('/instrutor/atualizar/{id}', 'InstrutorController@atualizar');


Route::get('/matricula', 'MatriculaController@index');
Route::get('/matricula/criar', 'MatriculaController@create');
Route::post('/matricula/criar', 'MatriculaController@store');

Route::post('/matricula/remover/{id}', 'MatriculaController@destroy');

Route::get('/matricula/update/{id}', 'MatriculaController@update');
Route::post('/matricula/atualizar/{id}', 'MatriculaController@atualizar');
