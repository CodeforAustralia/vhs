<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="pull-left allow-left-margin navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>
      <!-- Branding -->
      <a id="menu" href="">MENU</a>

      <a class="navbar-brand" href="{{ url('/dashboard') }} ">
        Housing Services Victoria
      </a>

    </div>
    @if (Auth::guest())
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        @if (Request::is('login'))
        <li><a href="{{ route('register') }}">Register</a></li>
        <li><a href="{{ route('password.request') }}">Reset&nbsp;Password</a></li>
        @endif @if (Request::is('register'))
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('password.request') }}">Reset&nbsp;Password</a></li>
        @endif @if (Request::is('password/reset'))
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
        @endif
      </ul>
    </div>
    @else


    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <!-- Start Page -->

          <!-- First Page -->
          <li>
            <a href="/">
              <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-start-page.svg')) !!}</div>&nbsp;First Page
            </a>
          </li>
          <!-- Letters -->
          <li>
            <a href="/inbox">
              <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-inbox.svg')) !!}</div>&nbsp;Letters
            </a>
          </li>
          <!-- My Profile -->
          <li>
            @if ( Auth::user()->usertype == '1' )
              <a href="/accounts">
                <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-profile.svg')) !!}</div>&nbsp;User Accounts
              </a>
            @else
              <a href="/accounts/{{ Auth::user()->id }}">
                <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-profile.svg')) !!}</div>&nbsp;My Profile
              </a>
            @endif
          </li>
          <!-- Payments -->
          <li>
            <a href="/placeholder">
              <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-payment.svg')) !!}</div>&nbsp;Payments
            </a>
          </li>
          <!-- Services -->
          <li>
            <a href="/placeholder">
              <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-services.svg')) !!}</div>&nbsp;Services
            </a>
          </li>
          <!-- Appointments -->
          <li>
            <a href="/placeholder">
              <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-appointments.svg')) !!}</div>&nbsp;Appointments
            </a>
          </li>
          <!-- Help -->
          <li>
            <a href="/placeholder">
              <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-help.svg')) !!}</div>&nbsp;Help
            </a>
          </li>
          <!-- Log out -->
          <li>
              <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-logout.svg')) !!}</div>&nbsp;Log out
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
        </ul>
      </div>  <!--/.nav-collapse -->
      @endif
    </div>
  </nav>

<a href="javascript:window.location.href='/escape';">
  <div id="quick-escape">Quick exit</div>
</a>
<div id="transparent-overlay"></div>
