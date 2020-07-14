<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SafeBdMainController@index');
Route::get('/product_details', 'SafeBdMainController@ProductDetails');
Route::get('/cart', 'SafeBdMainController@Cart');
Route::post('/add_to_cart', 'SafeBdMainController@AddToCart');
Route::get('/checkout', 'SafeBdMainController@Checkout');
Route::post('/thank_you', 'SafeBdMainController@Thankyou');

Route::get('/login', 'AdminController@index');
Route::post('/post_login', 'AdminController@postLogin');
Route::get('/logout', 'AdminController@logout');
Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/pending_orders', 'AdminController@PendingOrder');
Route::get('/completed_orders', 'AdminController@CompletedOrder');
Route::get('/add_new_product', 'AdminController@AddNewProduct');
Route::post('/add_new_product', 'AdminController@StoreNewProduct');
Route::post('/delivered', 'AdminController@Delivered');

Route::get('/safety', 'SafeBdMainController@Safety');
Route::get('/fire', 'SafeBdMainController@Fire');
Route::get('/lab', 'SafeBdMainController@Lab');
Route::get('/electronics', 'SafeBdMainController@Electronics');
Route::get('/mechanical', 'SafeBdMainController@Mechanical');
Route::get('/cevil', 'SafeBdMainController@Cevil');
Route::get('/textile', 'SafeBdMainController@Textile');
Route::get('/islamic', 'SafeBdMainController@Islamic');
