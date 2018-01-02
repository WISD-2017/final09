<?php

namespace App\Http\Controllers;
use App\Books;
use App\Bookcategory;
use App\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ShowProductList($categoryid){
        $books=books::all()->where('category_id',$categoryid);
        $categorys=bookcategory::all();
        return view('product.index',compact('categorys','books'));
    }

    public function ShowProductIndex()
    {
        $books = books::all();
        $categorys = bookcategory::all();
        return view('product.index', compact('categorys', 'books'));
    }

    public function ShowProductDetail($bookid){

        $books=books::all()->where('id',$bookid);
        $categorys=bookcategory::all();
        return view('product.ShopItem',compact('books','categorys'));
    }
    public function store(Request $request){
        $user = Auth::user();
        if ($user == null){
            return view('auth.login');
        }
        $cart=new Cart;
        $cart-> id = $request['id'];
        $cart-> user_email = $user['email'];
        $cart->save();
        $books = books::all();
        $categorys = bookcategory::all();
        return view('product.index', compact('categorys', 'books'));
    }

    public function singlestore(Request $request){
        $user = Auth::user();
        if ($user == null){
            return view('auth.login');
        }
        $cart=new Cart;
        $cart-> id = $request['id'];
        $cart-> user_email = $user['email'];
        $cart->save();
        $books = $request['id'];
        $books=books::all()->where('id',$request['id']);
        $categorys=bookcategory::all();
        return view('product.ShopItem',compact('books','categorys'));
    }

    public function CartShow(){
        $user = Auth::user();
        $user_data = cart::all()->where('user_email',$user['email']);
        $a=array();
        foreach ($user_data as $user_data)
        {
            array_push($a,$user_data->id);
        }
        $books=Books::all()->wherein('id',$a);

        return view('product.shoppingcart',compact('books'));
    }

    public function CartDeleter(Request $request){


        $user = Auth::user();
        $whereArray = array('user_email'=>$user['email']);
        DB::table('carts')->where($whereArray)->delete();
        return redirect()->route('product.buycart');
    }

    public function CartsingleDeleter(Request $request){
        $user = Auth::user();
        $whereArray = array('id'=>$request['id'],'user_email'=>$user['email']);
        DB::table('carts')->where($whereArray)->delete();
        return redirect()->route('product.buycart');
    }
}
