<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::resource('user', UserController::class);


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'viewProduct'])->name('product.show');

Route::get('/basket', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/basket', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
// Route::post('/basket/{id}', [ProductController::class, 'addToBasket'])->name('add.to.basket');
// Route::patch('update-basket', [ProductController::class, 'updateBasket'])->name('update.basket');
// Route::delete('remove-from-basket/{id}', [ProductController::class, 'removeFromBasket'])->name('product.remove');
