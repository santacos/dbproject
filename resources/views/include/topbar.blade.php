<header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>DB</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Activity</b>DB</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                @if(Auth::check())
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</span>
                </a>
                @else
                <a href="{{url('auth/login')}}" class="dropdown-toggle">
                  <span class="hidden-xs">Log in</span>
                </a>
                <li class="dropdown">
                <a href="{{ url('/auth/register') }}" class="dropdown-toggle">
                  <span class="hidden-xs">Register</span>
                </a>
                </li>
                @endif
                @if(Auth::check())
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ asset('/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    <p>
                      {{Auth::user()->firstname}} {{Auth::user()->lastname}}
                      <small>Chulalongkorn University Student</small>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{ url('/user/profile/'.Auth::user()->id) }}" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ url('/auth/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
                 @endif
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>

          </div>
        </nav>
      </header>