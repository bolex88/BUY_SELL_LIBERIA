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

Route::group([ ], function (){
 
Route::get('/', 'PostsController@showProducts')->name('products');
Route::get('/products/details/{id}', 'PostsController@showDetails')->name('products.details');

});

Auth::routes();

Route::group(['middleware'=>'auth'], function(){

Route::get('/home', 'UsersController@index')->name('home');
Route::get('/add-product', 'PostsController@showAddProductForm')->name('products.add');
Route::post('/add', 'PostsController@addProduct')->name('products.save');
Route::delete('/products/{id}', 'UsersController@destroy')->name('products.delete');
Route::get('/products/edit/{id}', 'UsersController@showEditForm')->name('products.edit');
Route::put('/products/update/{id}', 'UsersController@update')->name('products.update');

});







