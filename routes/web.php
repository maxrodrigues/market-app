<?php

use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordScreenController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ProcessLoginController;
use App\Http\Controllers\Admin\DashboardController;
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
    Route::get('/login', LoginController::class)->name('login');
    Route::post('/login', ProcessLoginController::class)->name('login.process');

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('forgot-password.get');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('forgot-password.post');

    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'resetPassword'])->name('reset-password.get');
    Route::post('/reset-password', [ForgotPasswordController::class, 'createNewPassword'])->name('reset-password.post');


//    Route::group([], function () {
        Route::get('dashboard', DashboardController::class)->name('dashboard');
//    });
});
