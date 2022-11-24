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

//Rotas para a tabela escolas
Route::get('/escola/novo', 'App\Http\Controllers\EscolasController@create');
Route::post('/escola/criada', 'App\Http\Controllers\EscolasController@store')->name('registrar_escola');
Route::get('/escolla/ver/{id}','App\Http\Controllers\EscolasController@show');

//Rotas para a tabela turmas
Route::get('/turma/novo', 'App\Http\Controllers\TurmasController@create');
Route::post('/turma/criada', 'App\Http\Controllers\TurmasController@store')->name('registrar_turma');

//Rotas para a tabela professores
Route::get('/professor/novo', 'App\Http\Controllers\ProfessoresController@create');
Route::post('/professor/criado', 'App\Http\Controllers\ProfessoresController@store')->name('registrar_professor');