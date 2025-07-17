<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index'); 

Route::get('/menu', [App\Http\Controllers\IndexController::class, 'showMenu'])->name('menu');
