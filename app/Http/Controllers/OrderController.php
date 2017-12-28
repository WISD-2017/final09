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
  public function ord(){
        $order = Order::all();
        return view('admin.orderlist')->with('order', $order);}

  public function order(Request $request){
      $order_id=$request['order_id'];
      $order = Order::all()->where('order_id','=',$order_id);
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
    public function info($book_id )
    {
        $books = Books::all()->where('id','=',$book_id);
        $data=['books'=>$books];
        return View('admin.productinfo',$data);
    }
  public function update(Request $request,$id)
  {
      $books=Books::find($id);
      $books->update($request->all());
      $books=Books::all();
      $data=['books'=>$books];
      return View('admin.productlist',$data);
  }
  public function productdel($book_id){
      Books::destroy($book_id);
      return redirect()->route('admin.product');
  }
}
