<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrderComponent extends Component
{
    use WithPagination;

    public $product_id;
    public $shipping_companies_id;
    public $payment_method_id;
    public $order_id;

    protected $rules = [
        'product_id' => 'nullable',
        'shipping_companies_id' => 'required',
        'payment_method_id' => 'required',
    ];
    public function render()
    {
        return view('livewire.order-component');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        if ($this->order_id){
            $order = Order::find($this->order_id);
        }else{
            $order = new Order();

        }


        $order->shipping_companies_id = $this->shipping_companies_id;
        $order->payment_method_id = $this->payment_method_id;
        $order->save();
        $this->cleare();
    }

    public function edit($order_id)
    {
        $order = Order::find($order_id);

        $this->order_id = $order->id;
        $this->shipping_companies_id = $order->shipping_companies_id;
        $this->payment_method_id = $order->payment_method_id;
    }

    public function delete($payment_id)
    {
        Order::destroy($payment_id);
    }

    public function cleare()
    {
        $this->order_id = null ;
        $this->shipping_companies_id = null ;
        $this->payment_method_id = null ;
    }
}
