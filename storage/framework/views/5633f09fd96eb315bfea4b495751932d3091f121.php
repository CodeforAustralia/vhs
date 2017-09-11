<nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="<?php echo e(url('/home')); ?>">
            Magic Box
          </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
            &nbsp;
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
              <!-- <li><a href="/contact">Contact</a></li> -->
            <!-- Authentication Links -->
            <?php if(Auth::guest()): ?>
            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
            <?php else: ?>
            <li><a href="/upload">Upload</a></li>
              <li><a href="/letters">Letters</a></li>
              <li><a href="/status">Status on the Hogwarts Register</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
              <li class=""><a href="/accountdetails">Account Details</a></li>

                <li>
                  <a href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo e(csrf_field()); ?>

                </form>
              </li>
            </ul>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>