<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\LocacaoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::resource('cliente', ClienteController::class);
Route::apiResource('cliente', ClienteController::class)->middleware('jwt.auth');
Route::apiResource('carro', CarroController::class)->middleware('jwt.auth');
Route::apiResource('locacao', LocacaoController::class)->middleware('jwt.auth');
Route::apiResource('marca', MarcaController::class)->middleware('jwt.auth');
Route::apiResource('modelo', ModeloController::class)->middleware('jwt.auth');

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);
Route::post('me', [AuthController::class, 'me']);