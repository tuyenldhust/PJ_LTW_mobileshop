@extends('layouts.front')

@section('title')
    My Orders
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
    <div class="order-container">
        <div class="card">
            <div class="card-header">
                <h4 class="text-white">My Orders</h4>
            </div>
            <div class="card-body">
                <table class="table-bordered">
                    <thead>
                    <tr>
                        <th>Order Date</th>
                        <th>Tracking Number</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orders as $item)
                        <tr>
                            <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                            <td>{{ $item->tracking_no }}</td>
                            <td>{{ $item->total_price }}</td>
                            <td>{{ $item->status == "0" ?'Pending' : 'completed' }}</td>
                            <td>
                                <a href="{{ url('view-order/'.$item->id) }}" class="btn btn-primary">View</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
