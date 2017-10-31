<?php

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

Route::get('/', "PrincipalController@abrirHome");
Route::get('/sobre', "PrincipalController@abrirSobre");
Route::get('/servicos', "PrincipalController@abrirServicos");
Route::get('/localizacao', "PrincipalController@abrirLocalizacao");
Route::get('/agende-uma-consulta', "PrincipalController@abrirAgendarConsulta");
