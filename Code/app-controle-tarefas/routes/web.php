<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('tarefa', 'App\Http\Controllers\TarefaController')->middleware('auth');
Route::resource('tarefa', 'App\Http\Controllers\TarefaController')->middleware('auth');