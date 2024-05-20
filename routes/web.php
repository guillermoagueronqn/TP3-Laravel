<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    return "Pagina principal";
})->name('home');

//Route::view('/', 'home')->name('home');

Route::get('/login', function() {
    return "Login usuario";
})->name('login');

//Route::view('/login', 'login')->name('login');

Route::get('/logout', function() {
    return "Logout usuario";
})->name('logout');

//Route::view('/logout', 'logout')->name('logout');

Route::get('/category', function() {
    return "Listado de categorías";
})->name('category');

//Route::view('/category', 'category')->name('category');

Route::get('/category/show/{id}', function($id) {
    return "Vista detalle del post " . $id;
})->name('categoryShowId');

//Route::view('/category/show/{id}', 'categoryShowId')->name('categoryShowId');

Route::get('/category/create', function() {
    return "Añadir post";
})->name('categoryCreate');

//Route::view('/category/create', 'categoryCreate')->name('categoryCreate');

Route::get('/category/edit/{id}', function($id) {
    return "Modificar post " . $id;
})->name('categoryEditId');

//Route::view('/category/edit/{id}', 'categoryEditId')->name('categoryEditId');