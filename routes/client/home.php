<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/products/{slug}', 'HomeController@showproduct')->name('categories.product');
Route::get('/product/{slug}', 'HomeController@productdetail')->name('product.detail');
Route::get('/product/color/{id}', 'HomeController@getcolor');

Route::get('/carts', 'CartController@index')->name('carts.index');

Route::get('/gest-login', 'LoginController@getlogin')->name('login.login');
Route::post('/gest-login', 'LoginController@login')->name('login.postlogin');
Route::post('/logout', 'LoginController@logout')->name('login.logout');
Route::get('/gest-register', 'LoginController@getregister')->name('login.getregister');
Route::post('/gest-register', 'LoginController@register')->name('login.register');


Route::post('/add-cart', 'CartController@addcart')->name('cart.add');
Route::delete('/delete-cart/{id}', 'CartController@delete');

Route::post('/update-quantity-cart/{id}', 'CartController@updateQuantity');

Route::group(['middleware' => 'check.login'], function () {
    Route::post('/apply-coupon', 'CartController@applyCoupon')->name('cart.coupon');
    Route::get('/checkout', 'CheckoutController@index')->name('cart.checkout');
    Route::get('/order', 'OrderController@index')->name('cart.order');
    Route::post('/order', 'OrderController@store')->name('order.create');

    Route::get('/orders', 'OrderController@getorder')->name('userorder.index');
});
