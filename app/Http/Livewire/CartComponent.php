<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CartComponent extends Component
{
    public function render()
    {
        return view('livewire.cart-component');
    }

    public function add (Product $product)
    {

        if(session()->has('cart')){
            $products =session()->get('cart');
            $products->push($product);
            session()->put('cart' , $products);
        }
        else{
            $products = collect();
            $products->push($product);
            session()->put('cart' , $products);
        }
    }
}
