<div class="top_blackbar">

</div>
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 navigation-offset-col">
      <div class="navbar-header ">

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>

          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

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
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
          @else
           <!--  <li><a href="/upload">Upload</a></li>
              <li><a href="/letters">Letters</a></li>
              <li><a href="/status">Status</a></li> -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user user-icon" aria-hidden="true"></i>
                  {{ Auth::user()->name }}
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li class=""><a href="/accountdetails">Account Details</a></li>

                  <li>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </li>
              </ul>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </nav>
