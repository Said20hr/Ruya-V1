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

Route::view('/','pages.index')->name('home');
Route::view('/about','pages.about-us')->name('about');
Route::view('/blog','pages.blog')->name('blog');
Route::view('/category','pages.category')->name('category');
Route::view('/checkout','pages.checkout')->name('checkout');
Route::view('/contact','pages.contact')->name('contact');
Route::view('/service','pages.service')->name('service');
Route::view('/cart','pages.shop-cart')->name('cart');
Route::view('/product','pages.product')->name('product');
Route::view('/portfolio','pages.clients')->name('portfolio');

Auth::routes();



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
