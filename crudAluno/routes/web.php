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
