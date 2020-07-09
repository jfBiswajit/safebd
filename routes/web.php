<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SafeBdMainController@index');

Route::get('blade', function () {
  return view('index');
});
