<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@getHome')->name('home');
Route::view('/login', 'auth\login')->name('login');

Route::get('/logout', function() {
    return "Logout usuario";
})->name('logout');

//Route::view('/logout', 'logout')->name('logout');

Route::get('/category', 'App\Http\Controllers\CategoryController@getIndex')->name('category');
Route::get('/category/show/{id}', 'App\Http\Controllers\CategoryController@getShow')->name('categoryShowId');
Route::get('/category/create', 'App\Http\Controllers\CategoryController@getCreate')->name('categoryCreate');
Route::get('/category/edit/{id}', 'App\Http\Controllers\CategoryController@getEdit')->name('categoryEditId');