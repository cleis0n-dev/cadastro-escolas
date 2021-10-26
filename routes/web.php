<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EscolaCrudController;
use App\Http\Controllers\TurmaCrudController;
use App\Http\Controllers\AlunoCrudController;
use App\Http\Controllers\AlunoTurmaCrudController;

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
    return redirect()->route('login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    //Cadastro de Instituições de Ensino
    Route::prefix('escolas')->name('escolas.')->group(function () {
        Route::get('cadastro',              [EscolaCrudController::class,'index'])->name('index');
        Route::get('lista_escolas',         [EscolaCrudController::class, 'show'])->name('show');
        Route::post('store',                [EscolaCrudController::class,'store'])->name('store');
        Route::get('editar_escola/{id}',    [EscolaCrudController::class,'edit'])->name('edit');
        Route::put('atualizar/{id}',        [EscolaCrudController::class, 'update'])->name('update');
        Route::get('delete/{id}',           [EscolaCrudController::class, 'destroy'])->name('delete');
        Route::get('lista_aluno', [EscolaCrudController::class, 'list_studant'])->name('alunos');
    });
    // Cadastro de Turmas Escolares
    Route::prefix('turmas')->name('turmas.')->group(function () {
        Route::get('cadastro',                      [TurmaCrudController::class, 'index'])->name('index');
        Route::post('store',                        [TurmaCrudController::class, 'store'])->name('store');
        Route::get('lista_turmas',                  [TurmaCrudController::class, 'show'])->name('show');
        Route::get('cadastrar/escola={id}',         [TurmaCrudController::class, 'create'])->name('create');
        Route::get('editar/{id}',                   [TurmaCrudController::class, 'edit'])->name('edit');
        Route::put('atualizar/{id}',                [TurmaCrudController::class,'update'])->name('update');
        Route::get('deletar/{id}',                  [TurmaCrudController::class, 'destroy'])->name('delete');
    });
    // Cadastro de Estudantes
    Route::prefix('alunos')->name('alunos.')->group(function () {
        Route::get('cadastro',      [AlunoCrudController::class, 'index'])->name('index');
        route::post('cadastrar',    [AlunoCrudController::class, 'store'])->name('store');
        Route::get('show',          [AlunoCrudController::class, 'show'])->name('show');
        Route::get('editar/{id}',   [AlunoCrudController::class, 'edit'])->name('edit');
        Route::put('atualizar/{id}',[AlunoCrudController::class, 'update'])->name('update');
        Route::get('deletar/{id}',  [AlunoCrudController::class,'destroy'])->name('delete');
    });
    //Gerência de Matrículas
    Route::prefix('matricula')->name('matricula.')->group(function () {
        Route::get('cadastro/{id}', [AlunoTurmaCrudController::class, 'create'])->name('create');
        Route::post('cadastrar',    [AlunoTurmaCrudController::class, 'store'])->name('store');
        Route::get('list',          [AlunoTurmaCrudController::class, 'show'])->name('show');
        Route::get('delete/{id}',   [AlunoTurmaCrudController::class, 'destroy'])->name('delete');
    });
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
