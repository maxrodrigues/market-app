<?php

use App\Http\Controllers\Admin\Auth\ForgotPasswordScreenController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ProcessLoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Orders\ListController;
use Illuminate\Support\Facades\Auth;
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
//    Route::get('/login', LoginController::class)->name('login');
    Route::get('/login', function () {
        Auth::loginUsingId(1);
        return redirect()->route('admin.dashboard');
    })->name('login');

    Route::get('/forgot-password', ForgotPasswordScreenController::class)->name('forgot-password');
    Route::post('/login', ProcessLoginController::class)->name('login.process');


    Route::group(['middleware' => ['auth']], function () {
        Route::get('dashboard', DashboardController::class)->name('dashboard');

        Route::get('orders', ListController::class)->name('orders.get');
        Route::get('orders/view', \App\Http\Controllers\Admin\Orders\ViewController::class)->name('orders.view');

        Route::get('products', \App\Http\Controllers\Admin\Products\ListController::class)->name('products.get');
    });
});
