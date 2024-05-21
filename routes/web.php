<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/login', 'auth\login')->name('login');

Route::get('/logout', function() {
    return "Logout usuario";
})->name('logout');

//Route::view('/logout', 'logout')->name('logout');

Route::view('/category', 'category\index')->name('category');
Route::view('/category/show/{id}', 'category\show')->name('categoryShowId');
Route::view('/category/create', 'category\create')->name('categoryCreate');
Route::view('/category/edit/{id}', 'category\edit')->name('categoryEditId');