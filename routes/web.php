<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index');
Route::get('/product_details/{id}', 'MainController@ProductDetails');
Route::get('/cart', 'MainController@Cart');
Route::post('/add_to_cart', 'MainController@AddToCart');
Route::get('/checkout', 'MainController@Checkout');
Route::post('/thank_you', 'MainController@Thankyou');



Route::prefix('admin')->group(function () {
  Route::get('/login', 'AdminController@index');
  Route::post('/post_login', 'AdminController@postLogin');
  Route::get('/logout', 'AdminController@logout');
  Route::get('/dashboard', 'AdminController@dashboard');
  Route::get('/pending_orders', 'AdminController@PendingOrder');
  Route::get('/completed_orders', 'AdminController@CompletedOrder');
  Route::get('/add_new_product', 'AdminController@AddNewProduct');
  Route::get('/update_banner', 'AdminController@UpdateBanner');
  Route::post('/add_new_product', 'AdminController@StoreNewProduct');
  Route::get('/products', 'AdminController@ProductList');
  Route::get('/products/{id}', 'AdminController@EditProduct');
  Route::post('/products/{id}', 'AdminController@UpdateProduct');
  Route::post('/delivered', 'AdminController@Delivered');
});

Route::get('/safety', 'MainController@Safety');
Route::get('/fire', 'MainController@Fire');
Route::get('/lab', 'MainController@Lab');
Route::get('/electronics', 'MainController@Electronics');
Route::get('/mechanical', 'MainController@Mechanical');
Route::get('/civil', 'MainController@Civil');
Route::get('/textile', 'MainController@Textile');
Route::get('/islamic', 'MainController@Islamic');
