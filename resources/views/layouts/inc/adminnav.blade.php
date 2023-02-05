<!-- Navbar -->
<nav class="header-navbar">
    <div class="nav-container">
        <div class="navbar-header">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
        </div>
        {{--          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--            <span class="sr-only">Toggle navigation</span>--}}
        {{--            <span class="navbar-toggler-icon"></span>--}}
        {{--            <span class="navbar-toggler-icon"></span>--}}
        {{--            <span class="navbar-toggler-icon"></span>--}}
        {{--          </button>--}}
        <div class="collapse navbar-collapse">
            <form class="navbar-form">
                <div class="input-group">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i>
                        <div class="ripple-container"></div>
                    </button>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:;">
                        <i class="material-icons">dashboard</i>
                        {{--                  <p>--}}
                        {{--                    Stats--}}
                        {{--                  </p>--}}
                    </a>
                </li>
                <li class="header-nav-item">
                    <a class="header-nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">notifications</i>
                        {{--                  <span class="notification">5</span>--}}
                        {{--                  <p>--}}
                        {{--                    Some Actions--}}
                        {{--                  </p>--}}
                    </a>
                    {{--                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">--}}
                    {{--                  <a class="dropdown-item" href="#">Mike John responded to your email</a>--}}
                    {{--                  <a class="dropdown-item" href="#">You have 5 new tasks</a>--}}
                    {{--                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>--}}
                    {{--                  <a class="dropdown-item" href="#">Another Notification</a>--}}
                    {{--                  <a class="dropdown-item" href="#">Another One</a>--}}
                    {{--                </div>--}}
                </li>
                <li class="nav-item person-dropdown">
                    <i class="material-icons">person</i>
                    {{--                  <p>--}}
                    {{--                    Account--}}
                    {{--                  </p>--}}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Log out') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
