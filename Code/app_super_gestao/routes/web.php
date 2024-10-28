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
// nome, categoria, assunto, mensagem

Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem}', function(string $nome, string $categoria, string $assunto, string $mensagem) {
    echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});