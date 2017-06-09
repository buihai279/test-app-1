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

Route::get('/admin/product','ProductController@index')->name('product.index');
Route::post('/admin/product','ProductController@store')->name('product.store');
Route::get('/admin/product/edit/{id}','ProductController@edit')->name('product.edit');
Route::post('admin/product/{id}', 'ProductController@update')->name('product.update');
Route::get('admin/manager-user/', 'UserController@index')->name('user.index');
Route::get('admin/user/modify', 'UserController@modify')->name('user.modify');
Route::post('admin/user/update', 'UserController@update')->name('user.update');

Route::post('admin/product/destroy/{id}', 'ProductController@destroy')->name('product.destroy');


Route::get ('/detail/{id}','HomeController@show')->name('detail');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');






