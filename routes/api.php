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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/lista', [listController::class, 'listagem']);
Route::get('/adicionar', [listController::class, 'adicionar']);
Route::get('/editar/{link}', [listController::class, 'editar']);
Route::get('/atualizar/{link}', [listController::class, 'atualizar']);
Route::get('/deletar/{link}', [listController::class, 'deletar']);
