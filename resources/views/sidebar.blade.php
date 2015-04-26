<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="height: auto;">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander The Great</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">เมนูหลัก</li>
            <li @yield('active_1')>
              <a href="{{ url('/activity') }}">
                <i class="fa fa-th"></i> <span>กิจกรรมทั้งหมด</span>
                <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li @yield('active_2')>
              <a href="#">
                <i class="fa fa-search"></i> <span>ค้นหาผู้ร่วมกิจกรรม</span>
              </a>
            </li>
            <li @yield('active_3')>
              <a href="{{ url('/youractivity') }}">
                <i class="fa fa-sitemap"></i> <span>กิจกรรมของคุณ</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
            <li @yield('active_4')>
              <a href="#">
                <i class="fa fa-users"></i> <span>กิจกรรมที่คุณเข้าร่วม</span>
                <small class="label pull-right label-primary">3</small>
              </a>
            </li>
            <li @yield('active_5')>
              <a href="#">
                <i class="fa fa-reply"></i> <span>คำร้องขอ/คำเชิญ</span>
                <small class="label pull-right bg-green">3</small>
              </a>
            </li>
            <li @yield('active_6')>
              <a href="#">
                <i class="fa fa-cog"></i> <span>แก้ไขข้อมูลส่วนตัว</span>
              </a>
            </li>
            <li @yield('active_7')>
              <a href="{{ url('/auth/logout') }}">
                <i class="fa fa-sign-out"></i> <span>ออกจากระบบ</span>
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