@extends('layouts.admin')

@section('title')
    Add Category
@endsection

@section('content')
    <div class=" card category-card">
        <div class="card-header category-card-header">
            <h4>Add category</h4>
        </div>
        <div class="car-body category-card-body">
            <form action ="{{ url('insert-category') }}" method = "POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="category-field">
                    <div class="input-category-field">
                        <label for="">Name</label>
                        <input type="text" class="text-form-control" name="name">
                    </div>
                    <div class="input-category-field">
                        <label for=""> Slug</label>
                        <input type="text" class="text-form-control" name="slug">
                    </div>
                    <div class="input-category-field">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="textarea-form-control"></textarea>
                    </div>
                    <div class="checkbox-gr">
                        <label for="">Status</label >
                        <input class="checkbox-form" type="checkbox" name="status">
                    </div>
                    <div class="checkbox-gr">
                        <label for=""> Popular</label>
                        <input class="checkbox-form" type="checkbox" name="popular">
                    </div>
                    <div class="input-category-field">
                        <label for="">Meta Title</label>
                        <input type="text" class="text-form-control" name="meta_title">
                    </div>
                    <div class="input-category-field">
                        <label for=""> Meta Keywords </label>
                        <textarea name="meta_keywords" rows="3" class="textarea-form-control"></textarea>
                    </div>
                    <div class="input-category-field">
                        <label for="">Meta Description </label>
                        <textarea name="meta_description" rows="3" class="text-form-control"></textarea>
                    </div>
                    <div class="img_btn">
                        <input type="file" name="image" class="img-form-control">
                        <button type="submit" class="category-summit-btn">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection


