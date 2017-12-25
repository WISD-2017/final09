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
Route::get('/', ['as' => 'firstpage', function () {
    return view('welcome');
}]);
Route::get('test',['as'=>'itfxxkingrow',function(){
    \App\Bookcategory::create([
        'category_id'=>'001',
        'category_name'=>'小說',
    ]);
    \App\Bookcategory::create([
        'category_id' => '002',
        'category_name' => '文學',
    ]);
}]);


// 後台
Route::group(['prefix' => 'admin'], function () {
    Route::get('/index', ['as' => 'admin.index', 'uses' => 'OrderController@index']);

    Route::get('/memberlist', ['as' => 'admin.member', 'uses' => 'OrderController@member']);

    Route::get('/orderlist', ['as' => 'admin.order', 'uses' => 'OrderController@order']);

    Route::get('/productlist', ['as' => 'admin.product', 'uses' => 'OrderController@product']);
    Route::post('/addproducklist',['as'=>'books.store','uses'=>'OrderController@store']);
    Route::get('/delproductlist/{book_id}',['as'=>'books.destroy','uses'=>'OrderController@productdel']);
});

Route::group(['prefix' => 'product'], function () {
    Route::get('/shoplist/{categoryid}', ['as' => 'product.shoplist', 'uses' => 'ProductController@ShowProductList']);
    Route::get('/shopitem/{bookid}', ['as' => 'product.shopitem', 'uses' => 'ProductController@ShowProductDetail']);
});



