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

Route::get('/',['as'=>'firstpage', function () {
    /*
    \App\Books::create([
        'book_id'=>'002',
        'book_name'=>'呂世浩細說史記：入門篇',
        'inventory'=>'30',
        'ISBN'=>'9789571371436',
        'category_id'=>'002',
        'text'=>'新書',
        'price'=>'237',
    ]);
    */
    return view('welcome');}]);
//
// 後台
Route::group(['prefix' => 'admin'], function() {
    Route::get('/index', ['as' => 'admin.index', 'uses' => 'OrderController@index']);
    Route::get('/memberlist',['as'=>'admin.member','uses'=>'OrderController@member']);
    Route::get('/orderlist',['as'=>'admin.order','uses'=>'OrderController@order']);
    Route::get('/productlist',['as'=>'admin.product','uses'=>'OrderController@product']);
});

Route::group(['prefix'=>'product'],function (){
    Route::get('/shoplist', ['as' => 'product.shoplist', 'uses' => 'ProductController@ShowProductList']);
    Route::get('/shopitem',['as' => 'product.shopitem', 'uses' => 'ProductController@ShowProductDetail']);
});



