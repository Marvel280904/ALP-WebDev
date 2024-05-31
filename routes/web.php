<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
})->name('Home');

Route::get('/Login', function () {
    return view('Login');
})->name('Login');

Route::get('/Register', function () {
    return view('Register');
})->name('Register');


Route::get('/Wishlist', function () {
    return view('Wishlist');
})->name('Wishlist');

Route::get('/Admin', function () {
    return view('Admin');
})->name('Admin');


Route::post('/Login', function () {

});


Route::post('/Login', [LoginController::class, 'PostLogin']);
Route::post('/Register', [LoginController::class, 'PostRegister']);
Route::post('/Home', [LoginController::class, 'PostLogout']);


use App\Http\Controllers\ProductController;

Route::get('/Products', [ProductController::class, 'index'])->name('Product');

use App\Http\Controllers\DetailProductController;

Route::get('/Product/{id}', [DetailProductController::class, 'show'])->name('ProductDetail');

use App\Http\Controllers\CartController;
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');





