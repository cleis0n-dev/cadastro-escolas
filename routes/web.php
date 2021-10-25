<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscolaCrudController;
use App\Http\Controllers\TurmaCrudController;
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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::prefix('escolas')->name('escolas.')->group(function () {
        Route::get('cadastro',              [EscolaCrudController::class,'index'])->name('index');
        Route::get('lista_escolas',         [EscolaCrudController::class, 'show'])->name('show');
        Route::post('store',                [EscolaCrudController::class,'store'])->name('store');
        Route::get('editar_escola/{id}',    [EscolaCrudController::class,'edit'])->name('edit');
        Route::put('atualizar/{id}',        [EscolaCrudController::class, 'update'])->name('update');
        Route::get('delete/{id}',           [EscolaCrudController::class, 'destroy'])->name('delete');
    });
    Route::prefix('turmas')->name('turmas.')->group(function () {
        Route::get('cadastro',                      [TurmaCrudController::class, 'index'])->name('index');
        Route::post('store',                        [TurmaCrudController::class, 'store'])->name('store');
        Route::get('lista_turmas',                  [TurmaCrudController::class, 'show'])->name('show');
        Route::get('cadastrar/escola={id}',         [TurmaCrudController::class, 'create'])->name('create');
        Route::get('editar/{id}',                   [TurmaCrudController::class, 'edit'])->name('edit');
        Route::put('atualizar/{id}',                [TurmaCrudController::class,'update'])->name('update');
        Route::get('deletar/{id}',                  [TurmaCrudController::class, 'destroy'])->name('delete');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
