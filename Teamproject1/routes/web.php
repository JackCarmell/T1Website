<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::resource('user', UserController::class);


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/basket', [ProductController::class, 'basket'])->name('basket');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'viewProduct'])->name('product.show');
Route::get('/basket/{id}', [ProductController::class, 'addToBasket'])->name('add.to.basket');
Route::patch('update-basket', [ProductController::class, 'updateBasket'])->name('update.basket');
Route::delete('remove-from-basket', [ProductController::class, 'removeFromBasket'])->name('remove.from.basket');
