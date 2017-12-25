<?php

namespace App\Http\Controllers;
use App\Books;
use App\Bookcategory;
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
        $books=books::all()->where('book_id',$bookid);
        $categorys=bookcategory::all();
        return view('product.ShopItem',compact('books','categorys'));
    }
}
