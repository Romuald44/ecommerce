<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/product', 'ProductController', ['except' => ['update', 'destroy']]);
Route::get('/product/update/{product}', 'ProductController@update')->name('product.update');
Route::get('/product/delete/{product}', 'ProductController@destroy')->name('product.destroy');
