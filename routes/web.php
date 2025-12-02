<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProduitAddController;
use App\Http\Controllers\ProduitListeController;
use App\Http\Controllers\ProduitEditController;
use App\Http\Controllers\CategorieAddController;
use App\Http\Controllers\CategorieListeController;
use App\Http\Controllers\CategorieEditController;
use App\Http\Controllers\AuthController;

/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('epg', function () {
    return view('seance');
});
Route::get('add-produit', function () {
    return view('produit.add');
});
Route::get('liste-produit', function () {
    return view('produit.liste');
});
*/

Route::get('add-produit'  ,  [ProduitAddController::class , "index"]);
Route::post('store-produit', [ProduitAddController::class , "store"]);

Route::get('liste-produit', [ProduitListeController::class, "index"]);
Route::post('del-produit' , [ProduitListeController::class, "destroy"]);

Route::post('edit-produit'  , [ProduitEditController::class, "index"]);
Route::post('update-produit', [ProduitEditController::class, "update"]);


Route::get('add-categorie'  ,  [CategorieAddController::class , "index"]);
Route::post('store-categorie', [CategorieAddController::class , "store"]);

Route::get('liste-categorie', [CategorieListeController::class, "index"]);
Route::post('del-categorie' , [CategorieListeController::class, "destroy"]);


Route::post('edit-categorie'  , [CategorieEditController::class, "index"]);
Route::post('update-categorie', [CategorieEditController::class, "update"]);

// ====================
// SIMPLE AUTH ROUTES
// ====================

// Show login form
Route::get('login', function() {
    return view('authentif.login');
});

// Handle login submission
Route::post('login', [AuthController::class, "login"]);

// Show register form
Route::get('register', function() {
    return view('authentif.register');
});

// Handle register submission
Route::post('register', [AuthController::class, "register"])->name('register.post');

