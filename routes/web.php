<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SafeBdMainController@index');
Route::get('/produc_details', 'SafeBdMainController@ProductDetails');
Route::get('/cart', 'SafeBdMainController@Cart');
Route::get('/checkout', 'SafeBdMainController@Checkout');
Route::get('/thank_you', 'SafeBdMainController@Thankyou');

Route::get('/dashboard', 'SafeBdMainController@Dashboard');
Route::get('/login', 'SafeBdMainController@Login');
Route::get('/pending_orders', 'SafeBdMainController@PendingOrder');
Route::get('/completed_orders', 'SafeBdMainController@CompletedOrder');
Route::get('/add_new_product', 'SafeBdMainController@AddNewProduct');
