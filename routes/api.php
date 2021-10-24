<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EscolaController;
use App\Http\Controllers\Api\TurmaController;
use App\Http\Controllers\Api\AlunoController;
use App\Http\Controllers\Api\AlunoTurmaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('escolas',EscolaController::class);
Route::apiResource('turmas',TurmaController::class);
Route::apiResource('alunos',AlunoController::class);
Route::apiResource('alunos_turma',AlunoTurmaController::class);
