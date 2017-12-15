<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use APP\Order as PostRequest;
class OrderController extends Controller
{
  public function index(){
      return View('admin.index');
  }
  public function order(PostRequest $request ){
    return View('admin.orderlist');
  }
    public function member(PostRequest $request ){
        return View('admin.memberlist');
    } public function product(PostRequest $request ){
    return View('admin.productlist');
}
}
