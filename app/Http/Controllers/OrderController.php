<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Order ;
use App\User;
use App\Books;
class OrderController extends Controller
{
  public function index(){
      return View('admin.index');
  }
  public function order(){
      $order = Order::all();
      return view('admin.orderlist')->with('order', $order);
  }
  public function member(){
      $member=User::all();
      return View('admin.memberlist')->with('member',$member);
  }
  public function product(){
    $books=Books::all();
    $data=['books'=>$books];
    return View('admin.productlist',$data);
  }
  public function store(Request $request){
      Books::create($request->all());
      $books=Books::all();
      $data=['books'=>$books];
      return View('admin.productlist',$data);
  }
  public function productdel($book_id){
      Books::destroy($book_id);
      return redirect()->route('admin.product');
  }
}
