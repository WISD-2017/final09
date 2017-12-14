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
  public function order(PostRequest $request ){
    return View::make('admin.orderlist');
  }
    public function member(PostRequest $request ){
        return View::make('admin.memberlist');
    } public function product(PostRequest $request ){
    return View::make('admin.productlist');
}
}
