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

Route::get('/escola/novo', 'app\Http\Controllers\EscolasController@create');
Route::post('/escola/novo', 'app\Http\Controllers\EscolasController@store')->name("nova_escola_add");
Route::get('/escola/ver', 'app\Http\Controllers\EscolasController@show')->name("exibir_escolas");
Route::get('/escola/{id}/editar', 'app\Http\Controllers\EscolasController@edit')->name("edit_view");
Route::put('/escola/{id}/atualizar/', 'app\Http\Controllers\EscolasController@update')->name("editar_escola");
Route::get('/escola/{id}/excluir', 'app\Http\Controllers\EscolasController@delete')->name("delete_view");
Route::delete('/escola/{id}/destroy/', 'app\Http\Controllers\EscolasController@destroy')->name('excluir_escola');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

