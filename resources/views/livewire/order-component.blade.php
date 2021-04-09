<div>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-4">
                    <!-- Product Select Input -->
                    <div class="row mb-2">
                      <div class="col">
                        <div class="form-outline mb-2">
                             <div class="form-group">
                                <label  class="form-label" for="status"> Product </label>
                                <select wire:model='product_id' class="form-control">
                                    <option> Select Product </option>
                                    @forelse (\App\Models\Product::all() as $product )
                                    <option value="{{$product->id}}"> {{$product->name}} </option>
                                    @empty
                                    <option> No Product Yet </option>
                                    @endforelse
                                  </select>
                                  @error('product_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <!-- Shipping Company Select input -->
                      <div class="form-outline mb-2">
                        <div class="form-group">
                            <label  class="form-label" for="status"> Shipping Company </label>
                            <select wire:model='shipping_companies_id' class="form-control">
                                <option> Select Shipping Company </option>
                                @forelse (\App\Models\ShippingCompany::all() as $company )
                                <option value="{{$company->id}}"> {{$company->name}} </option>
                                @empty
                                <option> No Shipping Company Yet </option>
                                @endforelse
                              </select>
                              @error('shipping_companies_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                      </div>
                    </div>

                    <!-- Payment Methos Select input -->
                    <div class="form-outline mb-2">
                        <label  class="form-label" for="status"> Payment Method </label>
                            <select wire:model='payment_method_id' class="form-control">
                                <option> Select Payment Method </option>
                                @forelse (\App\Models\PaymentMethod::all() as $payment )
                                <option value="{{$payment->id}}"> {{$payment->name}} </option>
                                @empty
                                <option> No Payment Method Yet </option>
                                @endforelse
                              </select>
                              @error('payment_method_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Submit button -->
                    <button wire:click='save' class="btn btn-primary btn-block mb-4"> Save </button>
            </div>
            <div class="col-md-8">
                <h3 class="text-center text-danger">
                    <strong>
                        <u>
                            All Orders Datails
                        </u>
                    </strong>
                </h3>
                <table class="table table-light table-hover text-center">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">ٍStatus</th>
                        <th scope="col">Total Invoice</th>
                        <th scope="col">Shipping Company</th>
                        <th scope="col">Payment Method</th>
                        <th scope="col">Created At </th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse (\App\Models\Order::all() as $order)
                        <tr>
                          <td>{{$order->id}}</td>
                          @if ($order->status =="pendding")
                          <td class="text-primary">{{$order->status}}</td>
                          @else
                          <td class="text-danger">{{$order->status}}</td>
                          @endif
                              @if ($order->total_invoice)
                              <td> {{$order->total_invoice}} </td>
                              @else
                              <td class="text-danger"> No Total Invoice Yet </td>
                              @endif

                          <td>{{$order->shipping_companies_id}}</td>
                          <td>{{$order->payment_method_id}}</td>
                          <td>{{$order->created_at->diffForHumans()}}</td>
                              <td> <a class="btn btn-success btn-sm text-light" wire:click='edit({{$order->id}})' > Edit </a> </td>
                              <td> <a class="btn btn-danger btn-sm text-light" wire:click='delete({{$order->id}})' > X </a> </td>
                        </tr>
                        @empty
                        <td colspan="5" class="text-danger text-center"> There is no Orders yet</td>
                        @endforelse
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
