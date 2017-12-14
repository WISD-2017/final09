<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use APP\Order as PostRequest;
class OrderController extends Controller
{
  public function index(){
      return view('admin.index');
  }
  public function ordershow(PostRequest $request ){
    $order=new PostEloquent::findOrFail($order_id);
    return View::make('admin.orderlist',['order'=>$order]);
  }
}
