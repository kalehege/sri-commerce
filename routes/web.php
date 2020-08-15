<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'ProductController@index')
    ->name('products-list');

Route::middleware('auth')->group(function () {
    Route::get('/home', 'MyProductsController@index')
        ->name('my-products');

    Route::get('/checkout', 'CheckoutController@show')
        ->name('checkout');
});

