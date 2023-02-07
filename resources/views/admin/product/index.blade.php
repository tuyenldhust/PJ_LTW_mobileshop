@extends('layouts.admin')

@section('title')
    Products
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Product Page</h3>
            <hr>
        </div>
        <div class="product-card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Selling Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td>{{ $item -> id }}</td>
                            <td>{{ $item -> category -> name }}</td>
                            <td>{{ $item -> name }}</td>
                            <td>{{ $item -> selling_price }}</td>
                            <td>{{ $item -> qty }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="cate-image" alt="Image Here">
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('edit-product/'.$item->id) }}" class="cate-btn btn-primary">Edit</a>
                                    <a href="{{ url('delete-product/'.$item->id) }}" class="cate-btn btn-danger">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
