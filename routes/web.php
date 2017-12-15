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
    return view('welcome');
});

//
// 後台
Route::group(['prefix' => 'admin'], function() {
    Route::get('/index', ['as' => 'admin.index', 'uses' => 'OrderController@index']);
    Route::get('/memberlist',['as'=>'admin.member','uses'=>'OrderController@member']);
    Route::get('/orderlist',['as'=>'admin.order','uses'=>'OrderController@order']);
    Route::get('/productlist',['as'=>'admin.product','uses'=>'OrderController@product']);
});

Route::group(['prefix'=>'product'],function (){
    Route::get('/shoplist', ['as' => 'product.index', 'uses' => 'ProductController@ShowProductList']);
    Route::get('/shopitem',['as' => 'product.index', 'uses' => 'ProductController@ShowProductDetail']);
});