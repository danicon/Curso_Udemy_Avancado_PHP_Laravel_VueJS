<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;

Route::get('/', function () {
    return view('welcome');
});

Route::Resource('noticia', NoticiaController::class);