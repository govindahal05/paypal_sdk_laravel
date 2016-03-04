<?php

Route::get('/', 'ProductsController@showProducts');

Route::post('/pay', ['as' => 'pay', 'uses' => 'PaypalController@pay']);

Route::get('/payment_status', ['as' => 'paymentStatus', 'uses' => 'PaypalController@paymentStatus']);

Route::post('/addtocart', 'ProductsController@addToCart');

Route::get('/mycart', ['as' => 'mycart', 'uses' => 'ProductsController@myCart']);
