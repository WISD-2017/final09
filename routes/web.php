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
Route::auth();

Route::get('/', ['as' => 'firstpage', function () {
    return view('welcome');
}]);

Route::get('/test', ['as' => 'itfxxkingrow', function () {


    \App\Bookcategory::create([
        'id' => '001',
        'category_name' => '小說',
    ]);
    \App\Bookcategory::create([
        'id' => '002',
        'category_name' => '文學',
    ]);
}]);
Route::get('/home',['as'=>'home',function(){
    return view('home');
}]);
// 後台
Route::group(['prefix' => 'admin'], function () {
    Route::get('/index', ['as' => 'admin.index', 'uses' => 'OrderController@index']);
    Route::get('/memberlist', ['as' => 'admin.member', 'uses' => 'OrderController@member']);
    Route::get('/orderlist', ['as' => 'admin.ord', 'uses' => 'OrderController@ord']);

    Route::post('/orderlist', ['as' => 'admin.order', 'uses' => 'OrderController@order']);

    Route::get('/productlist', ['as' => 'admin.product', 'uses' => 'OrderController@product']);
    Route::post('/addproductlist',['as'=>'books.store','uses'=>'OrderController@store']);

    Route::get('/productfix/{book_id}',['as'=>'books.info','uses'=>'OrderController@info']);

    Route::patch('/fixproductlist/{book_id}',['as'=>'books.update','uses'=>'OrderController@update']);

    Route::get('/delproductlist/{book_id}',['as'=>'books.destroy','uses'=>'OrderController@productdel']);

});

Route::group(['prefix' => 'product'], function () {
    Route::get('/shoplist', ['as' => 'product.shopindex', 'uses' => 'ProductController@ShowProductIndex']);
    Route::get('/shoplist/{categoryid}', ['as' => 'product.shoplist', 'uses' => 'ProductController@ShowProductList']);
    Route::get('/shopitem/{bookid}', ['as' => 'product.shopitem', 'uses' => 'ProductController@ShowProductDetail']);
    Route::get('/buyitem', ['as' => 'product.buyitem', 'uses' => 'ProductController@CartPut']);
});



