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
    return view('welcome');
});

Route::get('/main', function () {
    return view('frontend.main');
});

Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::get('/checkout', function () {
    return view('frontend.checkout');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/product', function () {
    return view('frontend.product');
});

Route::get('/shop', function () {
    return view('frontend.shop');
});

Route::get('/wishlist', function () {
    return view('frontend.wishlist');
});

Route::get('/blogid', function () {
    return view('frontend.blogid');
});
