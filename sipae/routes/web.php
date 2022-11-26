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


Route::get('/escola/novo', [EscolasController::class, 'create']);
Route::post('/escola/novo', [EscolasController::class, 'store'])->name('nova_escola_add');
Route::get('/escola/ver', [EscolasController::class, 'show'])->name('exibir_escolas');
Route::get('/escola/editar', [EscolasController::class, 'update']);
Route::post('/escola/editar', [EscolasController::class, 'store'])->name('editar_escola');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

