<?php

namespace App\Http\Controllers;
use App\Books;
use App\Bookcategory;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ShowProductList($categoryid){
        $books=books::all()->where('category_id',$categoryid);
        $categorys=bookcategory::all();
        return view('product.index',compact('categorys','books'));
    }


    public function ShowProductIndex(){
        $books=books::all();
        $categorys=bookcategory::all();
        return view('product.index',compact('categorys','books'));

    }

    public function ShowProductDetail($bookid){
        $books=books::all()->where('id',$bookid);
        $categorys=bookcategory::all();
        return view('product.ShopItem',compact('books','categorys'));
    }

    public function CartPut(Request $request){
        $user = Auth::user();
        $cart=new Cart;
        $cart-> id = $request['id'];
        $cart-> users_id = $user['email'];
        $cart->save();
        $books=books::all();
        $categorys=bookcategory::all();
        return view('product.index',compact('categorys','books'));

    }
}
