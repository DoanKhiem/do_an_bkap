<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.index');
})->name('user.index');

Route::get('/shop', function () {
    return view('user.shop');
})->name('user.shop');

Route::get('/product-detail', function () {
    return view('user.product-detail');
})->name('user.product-detail');

Route::get('/login-register', function () {
    return view('user.login-register');
})->name('user.login-register');

Route::get('/cart', function () {
    return view('user.cart');
})->name('user.cart');
