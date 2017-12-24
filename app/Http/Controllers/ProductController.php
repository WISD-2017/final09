<?php

namespace App\Http\Controllers;
use App\Books;
use App\Bookcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ShowProductList(){
    return view('product.index');
    }

    public function ShowProductDetail($bookid){
        $books=books::all()->where('book_id',$bookid);
        $categorys=bookcategory::all();
        return view('product.ShopItem',compact('books','categorys'));
    }
}
