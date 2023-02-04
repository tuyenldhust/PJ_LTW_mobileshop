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
                <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
                <form action ="{{ url('update-profile/'.$users->id) }}" method = "POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row-table">
                        <div class="col-table">
                            <label for="">First Name</label>
                            <input type="text" value="{{ $users->name }}" class="user_field" name="name">
                        </div>
                        <div class="col-table">
                            <label for="">Last Name</label>
                            <input type="text" value="{{ $users->lname }}" class="user_field" name="lname">
                        </div>
                        <div class="col-table">
                            <label for="">Email</label>
                            <input type="text" value="{{ $users->email }}" class="user_field" name="email">
                        </div>
                        <div class="col-table">
                            <label for="">Phone</label>
                            <input type="text" value="{{ $users->phone }}" class="user_field" name="phone">
                        </div>
                        <div class="col-table">
                            <label for="">Address 1</label>
                            <input type="text" value="{{ $users->address1 }}" class="user_field" name="address1">
                        </div>
                        <div class="col-table">
                            <label for="">Address 2</label>
                            <input type="text" value="{{ $users->address2 }}" class="user_field" name="address2">
                        </div>
                        <div class="col-table">
                            <label for="">City</label>
                            <input type="text" value="{{ $users->city }}" class="user_field" name="city">
                        </div>
                        <div class="col-table">
                            <label for="">State</label>
                            <input type="text" value="{{ $users->state }}" class="user_field" name="state">
                        </div>
                        <div class="col-table">
                            <label for="">Country</label>
                            <input type="text" value="{{ $users->country }}" class="user_field" name="country">
                        </div>
                        <div class="col-table">
                            <label for="">Pin Code</label>
                            <input type="text" value="{{ $users->pincode }}" class="user_field" name="pincode">
                        </div>
                        <div class="submit-btn">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
