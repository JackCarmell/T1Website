<?php

use Illuminate\Support\Facades\Route;

Route::resource('user', UserController::class);

Route::view('/contact', 'contact');
Route::view('/products', 'products');
Route::view('/', 'home');

