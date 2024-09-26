<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProduitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::resource("/client", ClientController::class);
Route::resource("/produit",ProduitController::class);
Route::resource("/commandes",CommandeController::class);
Route::resource("/admin",AdminController::class);
Route::resource("/panier",PanierController::class);

