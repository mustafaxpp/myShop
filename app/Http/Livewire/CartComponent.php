<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Collection;
class CartComponent extends Component
{
    use WithFileUploads;
    public $product;
    public $name;


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


    public function add($product_id)
    {
        // dd($this->product_id);
        $product = Product::find($product_id);
        if (session()->has('cart')) {
            $products =session()->get('cart');
            $products->push($product);
            session()->put('cart', $products);
        } else {
            $products = collect();
            $products->push($product);
            session()->put('cart', $products);
        }
        //  return redirect()->back()->back();
    }
    public function removeFromCart($product_id){

        // dd($product_id);
        Product::destroy($product_id);

    }
}
