<?php

use App\Http\Controllers\EscolasController;
use App\Http\Controllers\ProfileController;
use Database\Seeders\userAdmin;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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

//Rotas Escolas
Route::get('/escola/novo',               'app\Http\Controllers\EscolasController@create'     );
Route::post('/escola/novo',              'app\Http\Controllers\EscolasController@store'      ) ->name("nova_escola_add");
Route::get('/escola/ver',                'app\Http\Controllers\EscolasController@show'       ) ->name("exibir_escolas");
Route::get('/escola/{id}/editar',        'app\Http\Controllers\EscolasController@edit'       ) ->name("edit_view");
Route::put('/escola/{id}/atualizar/',    'app\Http\Controllers\EscolasController@update'     ) ->name("editar_escola");
Route::get('/escola/{id}/excluir',       'app\Http\Controllers\EscolasController@delete'     ) ->name("delete_view");
Route::delete('/escola/{id}/destroy/',   'app\Http\Controllers\EscolasController@destroy'    ) ->name('excluir_escola');

//Rotas Turmas
Route::get('/turma/novo',                'app\Http\Controllers\TurmasController@create'      );
Route::post('/turma/novo',               'app\Http\Controllers\TurmasController@store'       ) ->name("nova_turma_add");
Route::get('/turmas/ver',                'app\Http\Controllers\TurmasController@show'        ) ->name("exibir_turmas");
Route::get('/turma/{id}/editar',         'app\Http\Controllers\TurmasController@edit'        ) ->name("edit_view_turma");
Route::put('/turma/{id}/atualizar/',     'app\Http\Controllers\TurmasController@update'      ) ->name("editar_turma");
Route::get('/turma/{id}/excluir',        'app\Http\Controllers\TurmasController@delete'      ) ->name("delete_view_turma");
Route::delete('/turma/{id}/destroy/',    'app\Http\Controllers\TurmasController@destroy'     ) ->name('excluir_turma');

//Rotas Professor

Route::get('/professor/novo',            'app\Http\Controllers\ProfessoresController@create' );
Route::post('/professor/novo',           'app\Http\Controllers\ProfessoresController@store'  ) ->name("novo_professor_add");
Route::get('/professores/ver',           'app\Http\Controllers\ProfessoresController@show'   ) ->name("exibir_professores");
Route::get('/professor/{id}/editar',     'app\Http\Controllers\ProfessoresController@edit'   ) ->name("edit_view_professor");
Route::put('/professor/{id}/atualizar/', 'app\Http\Controllers\ProfessoresController@update' ) ->name("editar_professor");
Route::get('/professor/{id}/excluir',    'app\Http\Controllers\ProfessoresController@delete' ) ->name("delete_view_professor");
Route::delete('/professor/{id}/destroy/','app\Http\Controllers\ProfessoresController@destroy') ->name('excluir_professor');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

