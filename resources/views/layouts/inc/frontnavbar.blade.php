<nav class="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">HOME</a>
        <div class="search-bar">
            <form action="{{ url('searchproduct') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="search" id="search_product" name="product_name" require placeholder="Search Product" aria-describedby="basic-addon1">
                    <button type="submit" class="input-group-text"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <!-- <button class="navbar-toggler" type="button">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="" id="navbarNav">
            <ul>
                <li><a class="nav-link" href="{{ url('category') }}">Category</a></li>
                <li><a class="nav-link" href="{{ url('product') }}">Product</a></li>
                <li>
                    <a class="nav-link" href="{{ url('cart') }}">Cart
                        <span class="badge badge-pill bg-primary cart-count">0</span>
                    </a>
                </li>

                <li><a class="nav-link" href="{{ url('wishlist') }}">Wishlist
                        <span class="badge badge-pill bg-success wishlist-count">0</span>
                    </a></li>
                @guest
                    @if(Route::has('login'))
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            @endif
        </div>


        <!-- @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            @endif -->

        @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{ url('my-orders') }}">
                            My Orders
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ url('profile') }}">
                            My Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Log out') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                </ul>
            </li>
            @endguest
            </ul>
    </div>
    </div>
</nav>
