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

    // public function removeFromCart($productId): void
    // {
    //     CartFacade::remove($productId);
    //     $this->cart = CartFacade::get();
    //     $this->emit('productRemoved');
    // }

    // public function checkout(): void
    // {
    //     CartFacade::clear();
    //     $this->emit('clearCart');
    //     $this->cart = CartFacade::get();
    // }


public function addToCard (Product $product){

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
       dd($products);
    //  return redirect()->back()->back();
}


}
