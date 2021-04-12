<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{


    // public function add (Product $product)
    // {

    //     if(session()->has('cart')){
    //         $products =session()->get('cart');
    //         $products->push($product);
    //         session()->put('cart' , $products);
    //     }
    //     else{
    //         $products = collect();
    //         $products->push($product);
    //         session()->put('cart' , $products);
    //     }
    // }


    function index(){

        return view("cart.index");
    }
}
