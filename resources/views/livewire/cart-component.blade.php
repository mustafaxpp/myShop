        <div>
            <div class="table-main  table-bordered table-dark mt-20">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Images</th>
                            <th>product Name</th>
                            <th>Price</th>
                            <th class="text-center">Quantity</th>
                            <th>$Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{dd(session()->get("cart")->first()->id)}} --}}
                        @if (session()->get('cart'))
                            @forelse (session()->get(" cart") as $product)
                                {{-- {{dd($product)}} --}}
                                <tr>
                                    <td>
                                        <a href="#">
                                            <img class="img-fluid" width="100"
                                                src="{{ url('storage/' . $product->image) }}" />
                                        </a>
                                    </td>
                                    <td>
                                        {{ $product->name }}
                                    </td>
                                    <td class="text-danger">
                                        {{ $product->price }}
                                    </td>
                                    <td>
                                        {{ session()->get('cart')->count() }}
                                    </td>
                                    <td>
                                        {{ session()->get('cart')->count() * $product->price }}
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-danger" title="Remove({{ $product->name }})"
                                            type="button"
                                            wire:click="removeFromCart({{ $product->id }})">Remove</button>
                                    </td>
                                </tr>
                            @empty

                            @endforelse
                        @else
                            <div class="text-center w-full border-collapse p-6">
                                <span class="text-lg">¡Your cart is empty!</span>
                            </div>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        </div>
