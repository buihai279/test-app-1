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

Route::get('/product','ProductController@index')->name('product.index');
Route::get('/detail/{id}','HomeController@show')->name('detail');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
