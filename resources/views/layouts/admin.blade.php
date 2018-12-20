<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  
  <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- <link href="{{asset('css/admin/font-awesome.min.css')}}" rel="stylesheet"> -->
    <!-- NProgress -->
    <!-- <link href="{{asset('css/admin/nprogress.css')}}" rel="stylesheet"> -->
    <!-- iCheck -->
    <!-- <link href="{{asset('css/admin/green.css')}}" rel="stylesheet"> -->
  
    <!-- bootstrap-progressbar -->
    <link href="{{asset('css/admin/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <!-- <link href="{{asset('css/admin/jqvmap.min.css')}}" rel="stylesheet"/> -->
    <!-- bootstrap-daterangepicker -->
    <!-- <link href="{{asset('css/admin/daterangepicker.css')}}" rel="stylesheet"> -->

    <!-- Custom Theme Style -->
    <link href="{{asset('css/admin/custom.min.css')}}" rel="stylesheet">
</head>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index1.html" class="site_title"> <span>DailyFastFood!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('images/admin/a.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <h2>{{$user->first_name}}  {{$user->last_name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section active">
                <h3>General</h3>
                <ul class="nav side-menu" style="">
                  <li class=""><a><i class="fa fa-home"></i>Product<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                       @foreach ($category as $key => $value)
                       <li><a href={{$key}}>{{$value}}</a></li>
			                @endforeach
                      <li class=><a href="abc">tất cả sản phẩm</a></li>
                    </ul>
                  </li>
                  <li class=""><a href="form.html"><i class="fa fa-edit"></i> Category <span class="fa"></span></a>

                  </li>
                  <li class=""><a><i class="fa fa-desktop"></i> bill <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none;">
                      <li><a href="general_elements.html">bill chưa ktra</a></li>
                      <li><a href="media_gallery.html">bill đang làm</a></li>
                      <li><a href="typography.html">bill đã làm</a></li>
                    </ul>
                  </li>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Thống kê <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="">
                      <li><a href="chartjs.html">các thống kê</a></li>
                      <li><a href="chartjs2.html">các thống kê</a></li>
                    </ul>
                  </li>
                  <li><a href="{{route('users.index',Auth::user()->id)}}"><i class="fa fa-clone"></i>User <span class="fa "></span></a>
                    
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->
           
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="" href="login.html" data-original-title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
               <li> 
                <a href="login.html" class="pull-right"><i class="fa fa-sign-out pull-right "></i> Log Out</a></li>
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('images/admin/a.jpg')}}" alt="">{{$user->first_name}} {{$user->last_name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1704px;">          
        @yield('contentadmin')
          
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <!-- <footer>
          <div class="pull-right">
            demo thanh thiên <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer> -->
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('js/admin/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/admin/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('js/admin/fastclick.js')}}"></script>
     <script src="{{asset('js/admin/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <!-- <script src="js/Chart.min.js"></script> -->
    <!-- gauge.js -->
    <script src="{{asset('js/admin/gauge.min.js')}}"></script>
    <script src="{{asset('js/admin/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('js/admin/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('js/admin/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('js/admin/jquery.flot.js')}}"></script>
    <script src="{{asset('js/admin/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('js/admin/jquery.flot.time.js')}}"></script>
    <script src="{{asset('js/admin/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('js/admin/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('js/admin/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('js/admin/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('js/admin/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('js/admin/date.js')}}"></script>    
    <!-- JQVMap -->
    <script src="{{asset('js/admin/jquery.vmap.js')}}"></script>
    <script src="{{asset('js/admin/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('js/admin/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('js/admin/moment.min.js')}}"></script>
    <script src="{{asset('js/admin/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('js/admin/custom.min.js')}}"></script>
  
</body>
</html>