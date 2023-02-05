@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="admin-container">
        <h1 class="name_shop">SHOP</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboard</li>
        </ol>
        <div class="row-box">
            <div class="admin-content-card">
                <div class="card-body">
                    Total Categories
                    <h2>{{ $categories }}</h2>
                </div>
                <div class="card-footer">
                    <a href="{{ url('categories') }}">View Details</a>
                    <div class="small text-white"></div>
                </div>
            </div>
            <div class="admin-content-card bg-info">
                <div class="card-body">
                    Total Products
                    <h2>{{ $products }}</h2>
                </div>
                <div class="card-footer">
                    <a href="{{ url('products') }}">View Details</a>
                    <div class="small text-white"></div>
                </div>
            </div>
            <div class="admin-content-card bg-warning">
                <div class="card-body">
                    Total Orders
                    <h2>{{ $orders }}</h2>
                </div>
                <div class="card-footer">
                    <a href="{{ url('orders') }}">View Details</a>
                    <div class="small text-white"></div>
                </div>
            </div>
            <div class="admin-content-card bg-secondary">
                <div class="card-body">
                    Total Users
                    <h2>{{ $users }}</h2>
                </div>
                <div class="card-footer">
                    <a href="{{ url('users') }}">View Details</a>
                    <div class="small text-white"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
