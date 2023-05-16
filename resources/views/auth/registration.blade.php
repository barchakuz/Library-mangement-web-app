<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>COMSATS Library User | </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
  <div class="login_wrapper">
  <h2>Sign Up</h2>
  <form action="{{Route('register-user')}}" method="POST">
        @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{old('name')}}">
        <span class="text-danger">
            @error('name')
            {{$message}}
            @enderror
        </span>
        
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{old('email')}}" >
        <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
        </span>
        </div>
        <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="{{old('password')}}">
        <span class="text-danger">
            @error('password')
            {{$message}}
            @enderror
        </span>
        </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-success">Sign Up</button>
  </form>
</div>
  </body>
</html>
