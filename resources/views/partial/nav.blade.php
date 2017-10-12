<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="pull-left allow-left-margin navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- Branding -->
      <a class="navbar-brand" href="{{ url('/dashboard') }} ">
              VICTORIAN <span class="housing_services-title">HOUSING SERVICES</span>
          </a>
    </div>
    @if (Auth::guest())
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('register') }}">Register</a></li>
      </ul>
    </div>
    @else
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Landing Page</a></li>
        <li>
          @if ( Auth::user()->usertype == '1' )
          <a href="/accounts">User Accounts</a>
          @else
          <a href="/accounts/{{ Auth::user()->id }}">My Profile</a>
          @endif
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Go to <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/inbox">Inbox</a></li>
            <li><a href="/#">Services</a></li>
            <li><a href="/#">Make Payment</a></li>
            <li><a href="/#">Appointments</a></li>
            <li><a href="/#">Translation</a></li>
          </ul>
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
    </div>  <!--/.nav-collapse -->
    @endif
  </div>
</nav>
