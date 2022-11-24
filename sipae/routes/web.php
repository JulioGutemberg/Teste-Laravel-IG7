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
Route::get ('/escola/novo',          'App\Http\Controllers\EscolasController@create'       );
Route::post('/escola/criada',        'App\Http\Controllers\EscolasController@store'        )->name('registrar_escola');
Route::get ('/escola/buscar/{id}',    'App\Http\Controllers\EscolasController@show'        );
Route::get ('/escola/editar/{id}',   'App\Http\Controllers\EscolasController@edit'         );
Route::post('/escola/editar/{id}',   'App\Http\Controllers\EscolasController@update'       )->name('editar_escola');
Route::get ('/escola/excluir/{id}',  'App\Http\Controllers\EscolasController@delete'       );
Route::post('/escola/excluir/{id}',  'App\Http\Controllers\EscolasController@destroy'      )->name('excluir_escola');

//Rotas para a tabela turmas
Route::get ('/turma/novo',           'App\Http\Controllers\TurmasController@create'        );
Route::post('/turma/criada',         'App\Http\Controllers\TurmasController@store'         )->name('registrar_turma');
Route::get ('/turma/buscar/{id}',     'App\Http\Controllers\TurmasController@show'         );
Route::get ('/turma/editar/{id}',    'App\Http\Controllers\TurmasController@edit'          );
Route::post('/turma/editar/{id}',    'App\Http\Controllers\TurmasController@update'        )->name('editar_turma');
Route::get ('/turma/excluir/{id}',   'App\Http\Controllers\TurmasController@delete'        );
Route::post ('/turma/excluir/{id}',   'App\Http\Controllers\TurmasController@destroy'       )->name('excluir_turma');

//Rotas para a tabela professores
Route::get ('/professor/novo',       'App\Http\Controllers\ProfessoresController@create'   );
Route::post('/professor/criado',     'App\Http\Controllers\ProfessoresController@store'    )->name('registrar_professor');
Route::get ('/professor/buscar/{id}', 'App\Http\Controllers\ProfessoresController@show'    );
Route::get ('/professor/editar/{id}','App\Http\Controllers\ProfessoresController@edit'     );
Route::post('/professor/editar/{id}','App\Http\Controllers\ProfessoresController@update'   )->name('editar_professor');
Route::get ('/professor/excluir/{id}','App\Http\Controllers\ProfessoresController@delete'  );
Route::post ('/professor/excluir/{id}','App\Http\Controllers\ProfessoresController@destroy' )->name('excluir_professor');