<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SafeBdMainController@index');
Route::get('/product_details', 'SafeBdMainController@ProductDetails');
Route::get('/cart', 'SafeBdMainController@Cart');
Route::post('/add_to_cart', 'SafeBdMainController@AddToCart');
Route::get('/checkout', 'SafeBdMainController@Checkout');
Route::post('/thank_you', 'SafeBdMainController@Thankyou');

// Route::get('/login', 'SafeBdMainController@Login')->name('login');;

// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/dashboard', 'SafeBdMainController@Dashboard');
//     Route::get('/pending_orders', 'SafeBdMainController@PendingOrder');
//     Route::get('/completed_orders', 'SafeBdMainController@CompletedOrder');
//     Route::get('/add_new_product', 'SafeBdMainController@AddNewProduct');
// });

Route::get('login', 'AdminController@index');
Route::post('post_login', 'AdminController@postLogin');
Route::get('dashboard', 'AdminController@dashboard');
Route::get('logout', 'AdminController@logout');

Route::prefix('category')->group(function () {
  Route::get('/safety', 'SafeBdMainController@Safety');
  Route::get('/fire', 'SafeBdMainController@Fire');
  Route::get('/lab', 'SafeBdMainController@Lab');
  Route::get('/electronics', 'SafeBdMainController@Electronics');
  Route::get('/mechanical', 'SafeBdMainController@Mechanical');
  Route::get('/cevil', 'SafeBdMainController@Cevil');
  Route::get('/textile', 'SafeBdMainController@Textile');
  Route::get('/islamic', 'SafeBdMainController@Islamic');
});
