<?php

use App\Http\Controllers\Cargo_ColaboradorController;
use App\Http\Controllers\Colaborador;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\UnidadeController;
use App\Models\Cargo_Colaborador;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home');
})->name('dashboard');

Route::get('/cadastro-colaborador', [ColaboradorController::class, 'index'])->name('create-colaborador');

Route::post('/cadastro-colaborador', [ColaboradorController::class, 'store'])->name('store-colaborador');

Route::get('/cadastro-unidade', [UnidadeController::class, 'index'])->name('create-unidade');

Route::post('/cadastro-unidade', [UnidadeController::class, 'store'])->name('store-unidade');

Route::get('/colaborador/edit', [ColaboradorController::class, 'edit'])->name('edit-colaborador');

Route::put('/colaborador/update', [ColaboradorController::class, 'update'])->name('update-colaborador');

Route::get('/relatorio-colaboradores', [ColaboradorController::class, 'show'])->name('show-colaboradores');

Route::get('/ranking-colaboradores', [Cargo_ColaboradorController::class, 'show'])->name('show-ranking');

Route::get('/total-colaboradores', [UnidadeController::class, 'show'])->name('show-total');


