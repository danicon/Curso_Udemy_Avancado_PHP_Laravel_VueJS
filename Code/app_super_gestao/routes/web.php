<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobrenosController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'Olá, seja bem vindo ao curso!';
// });

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [SobrenosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){ return 'Login'; })->name('site.login');


Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){ return 'clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function(){ return 'fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'produtos'; })->name('app.produtos');
});

Route::get('/rota1', function() {
    echo 'Rota 1';
})->name('site.rota1');


Route::get('/rota2', function() {
    return redirect()->route('site.rota1');
})->name('site.rota2');

// Route::redirect('/rota2','/rota1');
