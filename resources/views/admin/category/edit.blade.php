@extends('layouts.admin');

@section('title',$category->name)

@section('content')
    <div class="form-container">
        <div class="form-header">
            <h4>Edit/Update category</h4>
        </div>
        <div class="form-body">
            <form action ="{{ url('update-category/'.$category->id) }}" method = "POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row_div">
                    <div class=product-field>
                        <label class="product-field-label" for="">Name</label>
                        <input type="text" value="{{ $category->name }}" class="form-control" name="name">
                    </div>
                    <div class=product-field>
                        <label class="product-field-label" for=""> Slug</label>
                        <input type="text" value="{{ $category->slug }}" class="form-control" name="slug">
                    </div>
                    <div class="product-field">
                        <label class="product-field-label" for="">Description</label>
                        <textarea name="description" rows="3" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class=product-field>
                        <label class="product-field-label" for="">Status</label >
                        <input type="checkbox" {{ $category->status == "1" ? 'checked':'' }} name="status">
                    </div>
                    <div class=product-field>
                        <label class="product-field-label" for=""> Popular</label>
                        <input type="checkbox" {{ $category->popular == "1" ? 'checked':'' }} name="popular">
                    </div>
                    <div class="product-field">
                        <label class="product-field-label" for="">Meta Title</label>
                        <input type="text" value="{{ $category->meta_title }}" class="form-control" name="meta_title">
                    </div>
                    <div class="product-field">
                        <label class="product-field-label" for=""> Meta Keywords </label>
                        <textarea name="meta_keywords"  rows="3" class="form-control">{{ $category->meta_keywords }}</textarea>
                    </div>
                    <div class="product-field">
                        <label class="product-field-label" for="">Meta Description </label>
                        <textarea name="meta_description" rows="3" class="form-control">{{ $category->meta_descrip }}</textarea>
                    </div>
                    <div class="image-div-center">
                        @if ($category -> image)
                            <img src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="Category image">
                        @endif
                        <div class="input-field">
                            <input type="file" name="image">
                        </div>
                        <div class="btn-submit">
                            <button type="submit " class="cate-btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
