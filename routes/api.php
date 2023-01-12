<?php

use App\Http\Controllers\listController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/listar', [listController::class, 'listagem']);
Route::post('/adicionar', [listController::class, 'adicionar']);
Route::get('/editar/{link}', [listController::class, 'editar']);
Route::put('/atualizar/{link}', [listController::class, 'atualizar']);
Route::delete('/deletar/{link}', [listController::class, 'deletar']);
