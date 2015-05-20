<aside class="main-sidebar"  >
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="height: auto;">
          <!-- Sidebar user panel -->
          @if(Auth::check())
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          @endif

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">เมนูหลัก</li>
            <li @yield('active_1')>
              <a href="{{ url('/activity') }}">
                <i class="fa fa-th"></i> <span>กิจกรรมทั้งหมด</span>
                <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            @if(Auth::check())
            <li @yield('active_2')>
              <a href="{{ url('/youractivity') }}">
                <i class="fa fa-sitemap"></i> <span>กิจกรรมของคุณ</span>
                <small class="label pull-right bg-red">@{{ownApp}}</small>
              </a>
            </li>
            <li @yield('active_3')>
              <a href="{{url('/joinactivity')}}">
                <i class="fa fa-users"></i> <span>กิจกรรมที่คุณเข้าร่วม</span>
                <small class="label pull-right label-primary">@{{join}}</small>
              </a>
            </li>
            <li @yield('active_4')>
              <a href="{{url('user/allapp')}}">
                <i class="fa fa-reply"></i> <span>คำร้องขอ/คำเชิญ</span>
                <small class="label pull-right bg-green">@{{request}}</small>
              </a>
            </li>
            <li @yield('active_5')>
              <a href="{{url('user/edit/'.Auth::user()->id)}}">
                <i class="fa fa-cog"></i> <span>แก้ไขข้อมูลส่วนตัว</span>
              </a>
            </li>
            <li @yield('active_7')>
              <a href="{{ url('/auth/logout') }}">
                <i class="fa fa-sign-out"></i> <span>ออกจากระบบ</span>
              </a>
            </li>
            @endif
            <li>
              <a href="{{url('auth/login')}}" class="dropdown-toggle">
                <i class="fa fa-sign-in"></i><span class="hidden-xs">เข้าสู่ระบบ</span>
              </a>
            </li>
            <li>
              <a href="{{ url('/auth/register') }}" class="dropdown-toggle">
                <i class="fa fa-fw fa-edit"></i><span class="hidden-xs">สมัครสมาชิก</span>
              </a>
            </li>
            
            <!-- <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>