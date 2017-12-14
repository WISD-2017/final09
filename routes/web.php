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

    \App\Post::create([
        'book_id'=>'001',
        'book_name'=>'教育是一場騙局',
        'inventory'=>'20',
        'ISBN'=>'9789571367460',
        'category_id'=>'001',
        'text'=>'新書',
        'price'=>'378',
    ]);

    $books=new\App\Books();
    $books->book_id='001';
    $books->book_name='教育是一場騙局';
    $books->inventory='20';
    $books->ISBN='9789571367460';
    $books->category_id='001';
    $books->text='新書';
    $books->price='378';
    $books->save();
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



