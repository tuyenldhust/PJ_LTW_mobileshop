@extends('layouts.front')

@section('title')
Checkout
@endsection

@section('content')
<div class="category_home">
    <div class="container">
        <h6>
            <a href="{{url('/') }}" class="text_home">
                Home
            </a> /
            <a href="{{url('cart') }}" style="color:#A61F69">
                Cart
            </a> /
            <a>Check Out</a>
        </h6>
    </div>
</div>

<!--Pay On Delivery-->
<div class="container_checkout">
    @if($cartitems->count() >0)
    <form action="{{ url('place-order') }}" method="POST" name="checkout-form" onsubmit="return validateForm()">
        {{ csrf_field() }}
        <div>
            <div>
                <div class="card_checkout">
                    <div class="card-body_checkout">
                        <h6> Basic Details</h6>
                        <hr>
                        <div class="checkout-form">
                            <div>
                                <label for="">First Name</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="fname" placeholder="Enter First Name">
                            </div>
                            <div>
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->lname }}" name="lname" placeholder="Enter Last Name">
                            </div>
                            <div>
                                <label for="">Email</label>
                                <input type="email" class="form-control" value="{{ Auth::user()->email }}" name="email" placeholder="Enter Email">
                            </div>
                            <div>
                                <label for="">Phone Number</label>
                                <input type="number" min="0100000000" max="0999999999" class="form-control" value="{{ Auth::user()->phone }}" name="phone" placeholder="Enter Phone Number">
                            </div>
                            <div>
                                <label for="">Address 1</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->address1 }}" name="address1" placeholder="Enter Address 1">
                            </div>
                            <div>
                                <label for="">Address 2</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->address2 }}" name="address2" placeholder="Enter Address 2">
                            </div>
                            <div>
                                <label for="">City</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->city }}" name="city" placeholder="Enter City">
                            </div>
                            <div>
                                <label for="">State</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->state }}" name="state" placeholder="Enter State">
                            </div>
                            <div>
                                <label for="">Country</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->country }}" name="country" placeholder="Enter Country">
                            </div>
                            <div>
                                <label for="">Pin code</label>
                                <input type="number" min="1000" class="form-control" value="{{ Auth::user()->pincode }}" name="pincode" placeholder="Enter Pin code">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card_checkout">
                    <div class="card-body_checkout" style="background-color: #fff !important;">
                        <h6>Order Details</h6>
                        <hr>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0;@endphp
                                @foreach ($cartitems as $item)
                                <tr>
                                    @php $total += ($item->products->selling_price * $item->prod_qty) @endphp
                                    <td>{{ $item->products->name }}</td>
                                    <td>{{ $item->prod_qty }}</td>
                                    <td>{{ $item->products->selling_price }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <h6>Grand Total <span class="float-end">{{$total}} VND </span></h6>
                        <hr>
                        <button type="submit">Place Order | COD</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--Pay with VNPAY & MOMO-->
    <!--<div class="container mt-3">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Order Details With VNPAY</h6>
                            <hr>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total = 0;@endphp
                                    @foreach ($cartitems as $item)
                                        <tr>
                                            @php $total += ($item->products->selling_price * $item->prod_qty * 90 / 100) @endphp
                                            <td>{{ $item->products->name }}</td>
                                            <td>{{ $item->prod_qty }}</td>
                                            <td>{{ $item->products->selling_price }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h6 class="px-2">Discount<span class="float-end">10%</span></h6>
                            <h6 class="px-2">Grand Total <span class="float-end">{{$total}} VND </span></h6>
                            <hr>
                            <form action="{{ url('vnpay_payment') }}" method="POST">
                                @csrf
                                <input type="hidden" name="total_vnpay" value="{{ $total }}">
                                <button type="submit" class="btn btn-primary w-100" name="redirect">Place Order | VNPAY</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Order Details With MOMO</h6>
                            <hr>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total = 0;@endphp
                                    @foreach ($cartitems as $item)
                                        <tr>
                                            @php $total += ($item->products->selling_price * $item->prod_qty * 95 / 100) @endphp
                                            <td>{{ $item->products->name }}</td>
                                            <td>{{ $item->prod_qty }}</td>
                                            <td>{{ $item->products->selling_price }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h6 class="px-2">Discount<span class="float-end">5%</span></h6>
                            <h6 class="px-2">Grand Total <span class="float-end">{{$total}} VND </span></h6>
                            <hr>
                            <form action="{{ url('momo_payment') }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary w-100">Place Order | MOMO</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    @else
    <div class="container_checkout">
        <div>
            <div>
                <div class="card_checkout">
                    <div class="card-body_checkout">
                        <h6> Basic Details</h6>
                        <hr>
                        <div class="checkout-form">
                            <div>
                                <label for="">First Name</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="fname" placeholder="Enter First Name">
                            </div>
                            <div>
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->lname }}" name="lname" placeholder="Enter Last Name">
                            </div>
                            <div>
                                <label for="">Email</label>
                                <input type="email" class="form-control" value="{{ Auth::user()->email }}" name="email" placeholder="Enter Email">
                            </div>
                            <div>
                                <label for="">Phone Number</label>
                                <input type="number" min="0100000000" max="0999999999" class="form-control" value="{{ Auth::user()->phone }}" name="phone" placeholder="Enter Phone Number">
                            </div>
                            <div>
                                <label for="">Address 1</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->address1 }}" name="address1" placeholder="Enter Address 1">
                            </div>
                            <div>
                                <label for="">Address 2</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->address2 }}" name="address2" placeholder="Enter Address 2">
                            </div>
                            <div>
                                <label for="">City</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->city }}" name="city" placeholder="Enter City">
                            </div>
                            <div>
                                <label for="">State</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->state }}" name="state" placeholder="Enter State">
                            </div>
                            <div>
                                <label for="">Country</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->country }}" name="country" placeholder="Enter Country">
                            </div>
                            <div>
                                <label for="">Pin code</label>
                                <input type="number" min="1000" class="form-control" value="{{ Auth::user()->pincode }}" name="pincode" placeholder="Enter Pin code">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card_checkout">
                    <div class="card-body_checkout" style="background-color: #fff !important;">
                        <h6>Order Details</h6>
                        <hr>
                        <h4 class="text-center">No products in cart</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
<script>
    function validateForm() {
        var fname = document.forms["checkout-form"]["fname"].value;
        var lname = document.forms["checkout-form"]["lname"].value;
        var email = document.forms["checkout-form"]["email"].value;
        var phone = document.forms["checkout-form"]["phone"].value;
        var address1 = document.forms["checkout-form"]["address1"].value;
        var address2 = document.forms["checkout-form"]["address2"].value;
        var city = document.forms["checkout-form"]["city"].value;
        var state = document.forms["checkout-form"]["state"].value;
        var country = document.forms["checkout-form"]["country"].value;
        var pincode = document.forms["checkout-form"]["pincode"].value;
        if (fname == "" || lname == "" || email == "" || phone == "" || address1 == "" || address2 == "" || city == "" || state == "" || country == "" || pincode == "") {
            alert("Please fill in the information");
            return false;
        }
    }
</script>
@endsection