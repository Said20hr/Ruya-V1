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

Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/about',[App\Http\Controllers\AboutpageController::class,'index'])->name('about');
Route::view('/blog','pages.blog')->name('blog');
Route::view('/checkout','pages.checkout')->name('checkout');
Route::view('/contact','pages.contact')->name('contact');
Route::get('/service',[App\Http\Controllers\ServiceController::class,'index'])->name('service');
Route::get('/service/{category}',[App\Http\Controllers\ServiceController::class,'show'])->name('service.category');
Route::view('/cart','pages.shop-cart')->name('cart');
Route::view('/product','pages.product')->name('product');
Route::view('/portfolio','pages.clients')->name('portfolio');

Auth::routes();



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Facebook Login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);
// Google Login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

