<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ShowProductList(){
    return view('product.index');
    }

    public function ShowProductDetail(){
        return view('product.ShopItem');
    }
}
