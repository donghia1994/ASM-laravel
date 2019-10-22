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

Route::get('/', function () {
    return view('page.home');
});
Route::get('/','ProductController@index');


Route::get('/page/product/{type}',"ProductController@list_product");
Route::get('/page/detailProduct',"ProductController@detail_product");

Route::get('/admin','UserController@index');
Route::post('/admin','UserController@store');

Route::get('/admin/index','UserController@create');
Route::get('/admin/viewdata/edit/{user_id}','UserController@edit');
Route::PATCH('/admin/viewdata/update/{user_id}','UserController@update');
Route::DELETE('/admin/viewdata/destroy/{user_id}','UserController@destroy');

// Product Route

// Route::post('/admin/products','ProductController@store');

// Route::get('/admin/products/view_Product',"ProductController@admin_index");

// Route::get('/admin/products/view_Product/edit/{product_id}','ProductController@edit');
// Route::PATCH('/admin/products/view_Product/update/{product_id}','ProductController@update');
// Route::DELETE('/admin/products/view_Product/destroy/{product_id}','ProductController@destroy');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
