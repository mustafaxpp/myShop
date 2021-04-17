<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class ShoppingCartComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $product_id;

    public function render()
    {
        return view('livewire.shopping-cart-component');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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


public function add(product $product_id){

    // dd($product_id);
    // $product = Product::find($product_id);
    // dd($product->id);
       if(session()->has('cart')){
           $products =session()->get('cart');
           $products->push($product_id);
           session()->put('cart' , $products);
       }
       else{
           $products = collect();
           $products->push($product_id);
           session()->put('cart' , $products);
       }
    //    dd($products);
    //  return redirect()->back()->back();
}



}
