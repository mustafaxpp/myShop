
    @forelse ( App\Models\Product::all() as $product )
                    <div class="col-sm-4">
                        <div class="best_shoes text-center"  style="width: 350px;">
                            <p class="best_text text-uppercase"  wire:model="name">{{$product->name}}</p>
                            <div class="shoes_icon m-1"><img class="rounded" style="width: 330px;" src="{{url('storage/'.$product->image)}}"></div>
                            <div class="text-center">
                                <div class="send_btn">
                                    <button class="main_bt btn btn-sm" title="add({{$product->name}})" wire:click="add({{$product->id}})" >Add To Cart</button>
                                </div>
                                {{-- <button type="button"  class="text-center mt-12 text-white bg-gray-800  p-1  rounded-sm hover:bg-green-500">Add</button> --}}
                            </div>
                            <div class="star_text">
                                <div class="left_part">
                                    <ul>
                                        <li><a href="#"><img src="images/star-icon.png"></a></li>
                                        <li><a href="#"><img src="images/star-icon.png"></a></li>
                                        <li><a href="#"><img src="images/star-icon.png"></a></li>
                                        <li><a href="#"><img src="images/star-icon.png"></a></li>
                                        <li><a href="#"><img src="images/star-icon.png"></a></li>
                                    </ul>
                                </div>
                                <div class="right_part ">
                                    <div class="shoes_price">$<span style="color: #ff4e5b;">{{$product->price}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cart -->
    @empty

    @endforelse

