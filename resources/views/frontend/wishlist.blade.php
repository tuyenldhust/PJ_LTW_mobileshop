@extends('layouts.front')

@section('title')
    My Wishlist
@endsection

@section('content')
<div class="category_home">
    <div class="container">
        <h6>
            <a href="{{url('/') }}" class="text_home">
                Home
            </a> /
            <a>
                Wishlist
            </a>
          </h6>
    </div>
</div>

<h2 class="title_cart">All add to Wishlist</h2>

<div class="container_wishlist">
    <div class="card wishlistitems">
        <div class="card-body">
            @if ($wishlist-> count() > 0)
                @foreach ($wishlist as $item)
                    <div class="product_data product_data_wishlist">
                        <div>
                            <img src="{{ asset('assets/uploads/products/' .$item->products->image) }}" height="70px" width="70px" alt="Image here">
                        </div>
                        <div>
                            <h6>{{ $item->products->name }}</h6>
                        </div>
                        <div>
                            <h6> Rs {{ $item->products->selling_price }}</h6>
                        </div>
                        <div>
                            <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                            @if($item->products->qty > $item->prod_qty)
                                <h6>In Stock</h6>
                                <label for="Quantity">Quantity</label>
                                <div class="input-group_cart" style="width: 130px;">
                                    <button class="changeQuantity decrement-btn">-</button>
                                    <input type="text" name="quantity" class="qty-input qty-input_cart" value="1">
                                    <button class="changeQuantity increment-btn">+</button>
                                </div>
                            @else
                                <h6 class="out_stock">Out of Stock</h6>
                            @endif
                        </div>
                        <div>
                            <button class="addToCartBtn"> <i class="fa fa-shopping-cart"></i>Add to Cart</button>
                        </div>
                        <div>
                            <button class="remove-wishlist-item"> <i class="fa fa-trash"></i>Remove</button>
                        </div>
                    </div>
                @endforeach
            </div>
            @else
                <div class="card-body text-center">
                    <h2><i class="fa fa-heart-o"></i> There are no products in your Wishlist</h2>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
