<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.public.home');
})->name('home');

Route::get('/product', function () {
    return view('pages.public.product');
})->name('product');

Route::get('/cart', function () {
    return view('pages.public.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('pages.public.checkout');
})->name('checkout');

Route::get('/login', function () {
    return view('pages.public.login');
})->name('login');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', \App\Http\Controllers\Admin\Auth\LoginController::class)->name('login');
    Route::get('/forgot-password', \App\Http\Controllers\Admin\Auth\ForgotPasswordScreenController::class)->name('forgot-password');
    Route::post('/login', \App\Http\Controllers\Admin\Auth\ProcessLoginController::class)->name('login.process');


//    Route::group([], function () {
        Route::get('dashboard', \App\Http\Controllers\Admin\DashboardController::class)->name('dashboard');
//    });
});
