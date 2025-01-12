<?php

use App\Http\Controllers\Admin\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/404', '404')->name('404');
Route::view('/about-us', 'about-us')->name('about');
Route::view('/blog-details', 'blog-details')->name('blog_details');
Route::view('/blog-grid', 'blog-grid')->name('blog_grid');
Route::view('/blog', 'blog')->name('blog');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/coming-soon', 'coming-soon')->name('coming_soon');
Route::view('/contact', 'contact')->name('contact');
Route::view('/forgot-password', 'forgot-password')->name('forgot_password');
Route::view('/privacy-policy', 'privacy-policy')->name('privacy_policy');
Route::view('/reset-password', 'reset-password')->name('reset_password');
Route::view('/shop', 'shop')->name('shop');
Route::view('/detail-product', 'detail-product')->name('detail_product');
Route::view('/create-product', 'create-product')->name('create_product');
Route::view('/terms-of-service', 'terms-of-service')->name('terms_of_service');

Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::get('/register', [AuthController::class, 'registerView'])->name('register');

Route::post('/login', [AuthController::class, 'handleLogin'])->name('login');
Route::post('/register', [AuthController::class, 'handleRegister'])->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/my-account', [AccountController::class, 'index'])->name('my_account');
});

