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
        <!-- Start Page -->
        <li>
          <a href="/">
            <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-start-page.svg')) !!}</div>&nbsp;Start Page
          </a>
        </li>
        <!-- Dropdown Menu -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Go to <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              @if ( Auth::user()->usertype == '1' )
              <a href="/accounts">
                <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-start-page.svg')) !!}</div>&nbsp;User Accounts
              </a>
              @else
              <a href="/accounts/{{ Auth::user()->id }}">
                <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-profile.svg')) !!}</div>&nbsp;My Profile
              </a>
              @endif
            </li>

            <!-- Inbox -->
            <li>
              <a href="/inbox">
               <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-inbox.svg')) !!}</div>&nbsp;Inbox
              </a>
            </li>
            <!-- Services -->
            <li>
              <a href="#">
               <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-services.svg')) !!}</div>&nbsp;Services
              </a>
            </li>
            <!-- Make Payment -->
            <li>
              <a href="#">
               <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-payment.svg')) !!}</div>&nbsp;Make Payment
              </a>
            </li>
            <!-- Appointments -->
            <li>
              <a href="#">
               <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-appointments.svg')) !!}</div>&nbsp;Appointments
              </a>
            </li>
            <!-- Translation -->
            <li>
              <a href="#">
               <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-translation.svg')) !!}</div>&nbsp;Translation
              </a>
            </li>
          </ul>
        </li>
        <!-- Help -->
        <li class="bottom_nav_items">
          <a href="#">
            <div class="navbar-menu-image">{!! file_get_contents(public_path('images/ico-help.svg')) !!}</div>&nbsp;Help
          </a>
        </li>
        <!-- Log out -->

        <li class="bottom_nav_items">
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
