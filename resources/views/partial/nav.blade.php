<div class="top_blackbar">

</div>
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="col-md-8 col-md-offset-2 navigation-offset-col">
            <div class="navbar-header ">

                <!-- Collapsed Hamburger -->
                <div class="hidden-sm">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>

                        <i class="fa fa-user user-icon" aria-hidden="true"></i>
                    </button>
                </div>

                <!-- Branding Image -->

                <a class="navbar-brand" href="{{ url('/dashboard') }} ">
                    VICTORIAN <span class="housing_services-title">HOUSING SERVICES</span>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li><a href="/contact">Contact</a></li> -->
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <div class="visible-sm visible-lg visible-md">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user user-icon user-toggle" aria-hidden="true"></i>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </div>

                    <div class="hidden-sm hidden-md hidden-lg">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </div>
                    @else
                    <!--  <li><a href="/upload">Upload</a></li>
                    <li><a href="/letters">Letters</a></li>
                    <li><a href="/status">Status</a></li> -->
                    <li class="dropdown">
                        <div class="visible-sm visible-lg visible-md">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user user-icon user-toggle" aria-hidden="true"></i>
                                {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li class="">
                                    @if ( Auth::user()->usertype == '1' )
                                    <a href="/accounts">Account Details</a>
                                    @else 
                                    <a href="/accounts/{{ Auth::user()->id }}">Account Details</a>
                                    @endif
                                </li>

                                <li>
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="hidden-sm hidden-md hidden-lg">
                            <li class="hidden-sm hidden-md hidden-lg">
                                @if ( Auth::user()->usertype == '1' )
                                <a href="/accounts">Account Details</a>
                                @else 
                                <a href="/accounts/{{ Auth::user()->id }}">Account Details</a>
                                @endif
                            </li>

                            <li class="hidden-sm hidden-md hidden-lg">
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="col-md-8 col-md-offset-2 navigation-offset-col">
        <div class="quick-escape_wrapper">
            <button type="button" class="btn btn-danger">Quick<br/>Escape</button>
        </div>
    </div>
</div>
