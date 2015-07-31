<!-- header and navigation -->

@if(Auth::check())
      <header class="main-header">
        <!-- Logo -->
        <a href="{!!URL::route('home')!!}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">Aiko</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Aiko</b> Admin</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             <!-- check session  -->
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{!! URL::to('public/dist/img/user2-160x160.jpg')!!}" class="user-image" alt="User Image" />
                  <span class="hidden-xs">{!!Auth::user()->name!!}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">

                    <img src="{!!URL::to('public/dist/img/user2-160x160.jpg')!!}" class="img-circle" alt="User Image" />
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{!!URL::route('logout')!!}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li> -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{URL::to('public/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>{!!Auth::user()->name!!}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..." />
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="{!!URL::route('user')!!}">
                <i class="fa fa-envelope"></i> <span>User Manager</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            
            <li>
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Store Manager</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>

            <li>
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Report - Statistic</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>

          </ul>
          </section>
        <!-- /.sidebar -->
      </aside>
@else
     <?php echo Redirect::route('login');?>
@endif


