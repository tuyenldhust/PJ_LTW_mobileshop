@extends('layouts.front')

@section('title')
    My Profile
@endsection
@section('content')
    <div class="navbar-div">
        <h6>
            <a class="link_nav" href="{{url('/') }}">
                Home
            </a> /
            <a>
                My Profile
            </a>
        </h6>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>My Profile
                    <a href="{{ url('edit-profile/'.$users->id) }}" class="btn-primary">Edit</a>
                </h4>
                <hr>
            </div>
            <div class="card-body">
                <div class="row-table">
                    <div class="col-table">
                        <label for="">First Name</label>
                        <div class="user_field">{{ $users->name }}</div>
                    </div>
                    <div class="col-table">
                        <label for="">Last Name</label>
                        <div class="user_field">{{ $users->lname }}</div>
                    </div>
                    <div class="col-table">
                        <label for="">Email</label>
                        <div class="user_field">{{ $users->email }}</div>
                    </div>
                    <div class="col-table">
                        <label for="">Phone</label>
                        <div class="user_field">{{ $users->phone }}</div>
                    </div>
                    <div class="col-table">
                        <label for="">Address 1</label>
                        <div class="user_field">{{ $users->address1 }}</div>
                    </div>
                    <div class="col-table">
                        <label for="">Address 2</label>
                        <div class="user_field">{{ $users->address2 }}</div>
                    </div>
                    <div class="col-table">
                        <label for="">City</label>
                        <div class="user_field">{{ $users->city }}</div>
                    </div>
                    <div class="col-table">
                        <label for="">State</label>
                        <div class="user_field">{{ $users->state }}</div>
                    </div>
                    <div class="col-table">
                        <label for="">Country</label>
                        <div class="user_field">{{ $users->country }}</div>
                    </div>
                    <div class="col-table">
                        <label for="">Pin Code</label>
                        <div class="user_field">{{ $users->pincode }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
