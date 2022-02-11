<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


  
class ProductController extends Controller
{

    public function showList()
    {
        $products = Product::all();

        return view('shop.list',
        ['products'=> $products]);
    }



}
