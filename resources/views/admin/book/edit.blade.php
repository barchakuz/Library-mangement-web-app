<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>COMSATS Library Admin Dashboard! | </title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('admin_theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('admin_theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('admin_theme/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{URL::asset('admin_theme/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{URL::asset('admin_theme/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{URL::asset('admin_theme/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{URL::asset('admin_theme/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{URL::asset('admin_theme/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <span>Admin Dashboard!</span></a>
              
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{URL::asset('img/home/img.png')}}" alt="" width="90px" height="90px">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                <li><a href="dashboard"><i class="fa fa-home"></i> Home </a>
                  <li><a><i class="glyphicon glyphicon-book"></i> Books <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="store">Update DataBase</a></li>
                      <li><a href="show">Library Database</a></li>
                    </ul>
                  <li><a><i class="glyphicon glyphicon-user"></i> LogIn/signUp <span class="fa fa-chevron-down"></span></a>
                  <li role="alert"><a href="{{URL::asset('admin')}}" class="glyphicon glyphicon-remove alert alert-danger" role="alert"><i></i> LogOut</a>
          
                  </li>
                  
                </ul>
              </div>
              <div class="menu_section">
              </div>

            </div>

          </div>
        </div>

        <div class="right_col" role="main">
            <!-- page content -->
            @yield('content')
            <div class="container">
          <h1>Update a Book</h1>
            <form action="/update/{{$posts->id}}" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="title">Post Title</label>
                    <input type="text" name="title" id="title" class="form-control" value={{$posts->post_title}}>
                </div>
                <div class="mb-3">
                    <label for="author">Post Author</label>
                    <input type="text" name="author" id="author" class="form-control" value={{$posts->post_author}}>
                </div>
                </br>
                <input type="submit" value="Update" name="update" class="btn btn-success">
        </form>

</div> 
          </div>
    
          <br />


                




    <!-- jQuery -->
    <script src="{{URL::asset('admin_theme/vendors/jquery/dist/jquery.min.js')}}"></script>
    Bootstrap
    <script src="{{URL::asset('admin_theme/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{URL::asset('admin_theme/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{URL::asset('admin_theme/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{URL::asset('admin_theme/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{URL::asset('admin_theme/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{URL::asset('admin_theme/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{URL::asset('admin_theme/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{URL::asset('admin_theme/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{URL::asset('admin_theme/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('admin_theme/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('admin_theme/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{URL::asset('admin_theme/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{URL::asset('admin_theme/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{URL::asset('admin_theme/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{URL::asset('admin_theme/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{URL::asset('admin_theme/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{URL::asset('admin_theme/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{URL::asset('admin_theme/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{URL::asset('admin_theme/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{URL::asset('admin_theme/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{URL::asset('admin_theme/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{URL::asset('admin_theme/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{URL::asset('admin_theme/build/js/custom.min.js')}}"></script>
	@stack('footer-script')
  </body>
</html>
