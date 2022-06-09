<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@index')->name('index');

Route::get('/categories', 'MainController@categories')->name('categories');
Route::get('/{category}', 'MainController@category')->name('category');

Route::get('/product', 'MainController@product')->name('product');

Route::get('/basket', 'MainController@basket')->name('basket');
Route::get('/basket/order', 'MainController@basketOrder')->name('basketOrder');
// Route::get('/basket/order', 'MainController@basketOrder')->name('basketOrder');