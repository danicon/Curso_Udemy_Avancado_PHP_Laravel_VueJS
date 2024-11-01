<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobrenosController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'Olá, seja bem vindo ao curso!';
// });

Route::get('/', [PrincipalController::class, 'principal']);
Route::get('/sobre-nos', [SobrenosController::class, 'sobreNos']);
Route::get('/contato', [ContatoController::class, 'contato']);
Route::get('/login', function(){ return 'Login'; });


Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){ return 'clientes'; });
    Route::get('/fornecedores', function(){ return 'fornecedores'; });
    Route::get('/produtos', function(){ return 'produtos'; });
});


