@forelse ( App\Models\Product::inRandomOrder(6) as $product )
    <div class="col-sm-4">
        <div class="best_shoes">
            <p class="best_text">{{ $product->name }}</p>
            <div class="shoes_icon m-1"><img class="rounded" src="{{ url('storage/' . $product->image) }}"></div>
            <div class="text-center">
                <div class="send_btn">
                    <button class="main_bt btn btn-sm" title="add({{ $product->name }})"
                        wire:click="add({{ $product->id }})">Add To Cart</button>
                </div>
                <div class="left_part">
                    <ul>
                        <li><a href="#"><img src="images/star-icon.png"></a></li>
                        <li><a href="#"><img src="images/star-icon.png"></a></li>
                        <li><a href="#"><img src="images/star-icon.png"></a></li>
                        <li><a href="#"><img src="images/star-icon.png"></a></li>
                        <li><a href="#"><img src="images/star-icon.png"></a></li>
                    </ul>
                </div>
                <div class="right_part">
                    <div class="shoes_price">$<span style="color: #ff4e5b;">{{ $product->price }}</span></div>
                </div>
            </div>
        </div>



    </div>

@empty

@endforelse
