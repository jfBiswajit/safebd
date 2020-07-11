<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SafeBdMainController@index');
Route::get('/produc_details', 'SafeBdMainController@ProductDetails');
Route::get('/cart', 'SafeBdMainController@Cart');
Route::get('/checkout', 'SafeBdMainController@Checkout');
Route::get('/thank_you', 'SafeBdMainController@Thankyou');
