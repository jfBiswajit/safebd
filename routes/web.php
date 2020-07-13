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

Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
// Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout');

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
