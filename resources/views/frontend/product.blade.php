@extends('layouts.front')

@section('title')
    Product
@endsection

@section('content')
    <div class="category_home">
        <div class="container">
            <h6>
                <a href="{{url('/') }}" class="text_home">
                    Home
                </a> /
                <a>
                    Product
                </a>
            </h6>
        </div>
    </div>
    <div class="wrapper">
        <div class="container">
            <div>
                <div>
                    <h2 class="all">All Products</h2>
                    <div class="products">
                        @foreach ($product as $prod)
                            <div class="item">
                                <a href="{{ url('view-category/'.$prod->category->name.'/'.$prod->slug)}}">
                                    <div>
                                        <img src="{{ asset('assets/uploads/products/'.$prod->image)}}"  alt="Product image" class="product-info">
                                        <div>
                                            <h5 style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;">{{$prod->name}}</h5>
                                            <small class="float-start"><s>{{$prod->original_price}}₫</s></small>
                                            <h4 class="float-end">{{$prod->selling_price}}₫</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
