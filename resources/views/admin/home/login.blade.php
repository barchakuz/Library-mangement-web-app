<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>COMSATS Library Admin | </title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('admin_theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('admin_theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('admin_theme/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{URL::asset('admin_theme/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{URL::asset('admin_theme/build/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('theme\css\index2.css')}}">
  </head>

  <body class="login">
  <ul class="t">
        <li class="tt"><a href="{{asset('admin')}}">Admin</a></li>
        <li class="tt"><a href="{{asset('login')}}">LogIn/SignIn</a></li>
        <li class="tt"><a href="{{asset('book')}}">Books</a></li>
        <li class="tt"><a href="{{asset('/')}}">Home</a></li>
        <h1 class="top">COMSATS Library Management System</h1>

</ul>  
  <div class="slider">

  </div>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form acton="{{route('register')}}" method='post'>
              @csrf
              <h1>Admin Login Form</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required />
              </div>
              <div>
                <input type="submit" name="login" class="btn btn-warning">
              </div>
                <br />

                <div>
                  <br>
                  <h1></i> COMSATS Library Admin!</h1>
                </div>
              </div>
            </form>
          </section>
        </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
