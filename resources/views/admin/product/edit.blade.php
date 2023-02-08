@extends('layouts.admin')

@section('title', $products->name)

@section('content')
    <div class="form-container">
        <div class="form-header">
            <h4>Edit Product</h4>
        </div>
        <div class="form-body">
            <form action ="{{ url('update-product/'.$products->id) }}" method = "POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row_div">
                    <div class="product-field">
                        <select class="form-select">
                            <option value="">{{ $products->category->name }}</option>
                        </select>
                    </div>
                    <div class="product-field">
                        <label for="">Name</label>
                        <input type="text" class="form-control" value="{{ $products->name }}" name="name">
                    </div>
                    <div class="product-field">
                        <label for=""> Slug</label>
                        <input type="text" class="form-control" value="{{ $products->slug }}" name="slug">
                    </div>
                    <div class="product-field">
                        <label for="">Small Description</label>
                        <textarea name="small_description" class="form-control">{{ $products->small_description }}</textarea>
                    </div>
                    <div class="product-field">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control">{{ $products->description }}</textarea>
                    </div>
                    <div class="product-field">
                        <label for=""> Original Price</label>
                        <input type="number" value="{{ $products->original_price }}" class="form-control"  name="original_price">
                    </div>
                    <div class="product-field">
                        <label for=""> Selling Price</label>
                        <input type="number" value="{{ $products->selling_price }}" class="form-control" name="selling_price">
                    </div>
                    <div class="product-field">
                        <label for=""> Tax</label>
                        <input type="number" value="{{ $products->tax }}" class="form-control" name="tax">
                    </div>
                    <div class="product-field">
                        <label for=""> Quanlity</label>
                        <input type="number" value="{{ $products->qty }}" class="form-control" name="qty">
                    </div>

                    <div class="product-field">
                        <label for="">Status</label >
                        <input type="checkbox" {{ $products->status == "1" ? 'checked' : '' }} name="status">
                    </div>
                    <div class="product-field">
                        <label for="">Trending</label >
                        <input type="checkbox" {{ $products->trending == "1" ? 'checked' : '' }} name="trending">
                    </div>

                    <div class="product-field">
                        <label for="">Meta Title</label>
                        <input type="text" value="{{ $products->meta_title }}" class="form-control" name="meta_title">
                    </div>
                    <div class="product-field">
                        <label for=""> Meta Keywords </label>
                        <textarea name="meta_keywords" rows="3" class="form-control">{{ $products->meta_keywords }}</textarea>
                    </div>
                    <div class="product-field">
                        <label for="">Meta Description </label>
                        <textarea name="meta_description" rows="3" class="form-control">{{ $products->meta_description }}</textarea>
                    </div>
                    <div class="image-div-center">
                        @if($products->image)
                            <img src="{{ asset('assets/uploads/products/'.$products->image) }}" alt="">
                        @endif
                        <div class="input-field">
                            <input type="file" name="image">
                        </div>
                    </div>
                    <div class="btn-submit">
                        <button type="submit " class="cate-btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
