<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\turmaController;
use App\Http\Controllers\alunoController;
use App\Http\Controllers\presencaController;
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
    return view('welcome');
});

Route::resource('/alunos', alunoController::class);
Route::resource('/turmas', turmaController::class);
Route::resource('/presenca', presencaController::class);

//Route::get('/presenca/validacao/{alunos_id}',[presencaController::class, 'validacao']);
Route::get('/presenca', [presencaController::class, 'index']);
Route::get('/presenca/create/',[presencaController::class, 'create']);
Route::post('/presenca/store/',[presencaController::class, 'store']);
Route::get('/presenca/{$id}',[presencaController::class, 'show']);


Route::get('/turmas/',[turmaController::class, 'index']);
Route::get('/turmas/create/',[turmaController::class, 'create']);
Route::post('/turmas/store/',[turmaController::class, 'store']);
Route::get('/turmas/{turmas}/edit/',[turmaController::class, 'edit']);
Route::post('/turmas/update/{turmas}',[turmaController::class, 'update']);
Route::get('/turmas/destroy/{turmas}',[turmaController::class, 'destroy']);

Route::get('/alunos/',[alunoController::class, 'index']);
Route::get('/alunos/create/',[alunoController::class, 'create']);
Route::post('/alunos/store/',[alunoController::class, 'store']);
Route::get('/alunos/{alunos}/edit/',[alunoController::class, 'edit']);
Route::post('/alunos/update/{alunos}',[alunoController::class, 'update']);
Route::get('/alunos/destroy/{alunos}',[alunoController::class, 'destroy']);
