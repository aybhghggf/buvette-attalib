<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index'); 

Route::get('/menu', [App\Http\Controllers\IndexController::class, 'showMenu'])->name('menu');

//about 
Route::get('/about', [App\Http\Controllers\IndexController::class, 'showAbout'])->name('about');

Route::get('/menu/{id}', [App\Http\Controllers\ProductController::class, 'showProduct'])->name('product');

Route::post('/ajouterPanier/{id}', [App\Http\Controllers\ProductController::class, 'ajouterPanier'])->name('ajouterPanier');

Route::get('/panier', [App\Http\Controllers\PanierController::class, 'index'])->name('panier');

Route::delete('/supprimerPanier/{id}', [App\Http\Controllers\ProductController::class, 'SupprimerPanier'])->name('supprimerPanier');

// Checkout route
Route::post('/passer-commande', [App\Http\Controllers\ProductController::class, 'passerCommande'])->name('passer-commande');