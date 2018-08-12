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


//Pages ROUTES


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','ProductController@index')->name('shopilocos');
//Route::get('/products/create','ProductCategoryController@index')->name('forms.newproduct');
Route::get('/uploads','uploadController@index');






Auth::routes();
//resource ROUTES


Route::resource('users','UserController');
Route::resource('products','ProductController');
Route::resource('product_categories','ProductCategoryController');
Route::resource('roles','RoleController');
Route::resource('role_users','RoleUserController');
Route::resource('carts', 'CartController');
Route::resource('buyers','BuyerController');
