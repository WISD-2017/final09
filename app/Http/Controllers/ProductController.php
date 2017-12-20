<?php

namespace App\Http\Controllers;
use App\Books;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ShowProductList(){
    return view('product.index');
    }

    public function ShowProductDetail(){
        $books=books::all();
        return view('product.ShopItem')->with('books',$books);
    }
}
