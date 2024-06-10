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


Route::post('/Login', [LoginController::class, 'PostLogin'])->name('Login');
Route::post('/Register', [LoginController::class, 'PostRegister']);
Route::post('/Home', [LoginController::class, 'PostLogout']);


use App\Http\Controllers\ProductController;

Route::get('/Products', [ProductController::class, 'index'])->name('Product');

use App\Http\Controllers\DetailProductController;

Route::get('/Product/{id}', [DetailProductController::class, 'show'])->name('ProductDetail');

use App\Http\Controllers\CartController;
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::delete('/cart/{id}', 'CartController@remove')->name('cart.remove');

use App\Http\Controllers\WishlistController;

Route::post('/wishlist/add', [WishlistController::class, 'addToWish'])->name('wish.add');
Route::get('/wishlist', [WishlistController::class, 'showWish'])->name('wish.show');

use App\Http\AuthController;
Route::get("/login", [AuthController::class,"ShowLogin"]);
Route::post("/login",[AuthController::class,"PostLogin"])->name("PostLogin");
Route::get("/logout",[AuthController::class,"PostLogout"])->name("logout");
// Route::get("/registration", [AuthController::class,"ShowCreateAcc"]);
// Route::post("/registration",[AuthController::class,"PostRegister"])->name("PostRegister");
// Route::get("/forgot-password", [AuthController::class,"ShowForgotPass"]);
// Route::post("/forgot-password-act",[AuthController::class,"PostForgotPass"])->name("forgotpasswordact");



