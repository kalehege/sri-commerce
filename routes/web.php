<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'ProductController@index')
    ->name('products-list');

Route::middleware('auth')->group(function () {
    Route::get('/home', 'MyProductsController@index')
        ->name('my-products');

    Route::get('/checkout/success', 'CheckoutController@success')
        ->name('checkout.success');

    Route::get('/checkout/cancelled', 'CheckoutController@cancelled')
        ->name('checkout.cancelled');

    Route::get('/checkout/{product}', 'CheckoutController@show')
        ->name('checkout');
});

