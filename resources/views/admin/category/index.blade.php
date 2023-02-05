@extends('layouts.admin')

@section('title')
    Categories
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Category page</h3>
            <hr>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item -> id }}</td>
                            <td>{{ $item -> name }}</td>
                            <td>{{ $item -> description }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/category/'.$item -> image) }}" class="cate-image" alt="Image Here">
                            </td>
                            <td class="btn-group">
                                <a href="{{ url('edit-category/'.$item -> id)}}" class="cate-btn btn-primary">Edit</a>
                                <a href="{{ url('delete-category/'.$item -> id) }}" class="cate-btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
