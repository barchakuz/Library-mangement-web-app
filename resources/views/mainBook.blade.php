<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('theme\css\index.css')}}">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    

    <title>Home Page</title>
</head>
<body>
<ul class="home-m">
        <li class="home-x"><a href="{{asset('admin')}}">Admin</a></li>
        <li class="home-x"><a href="{{asset('login')}}">LogIn/SignIn</a></li>
        <li class="home-x"><a href="{{asset('book')}}">Books</a></li>
        <li class="home-x"><a href="{{asset('/')}}">Home</a></li>
        <h1 class="home-x">COMSATS Library Management System</h1>

</ul>
    <div class="slider">

    </div>
  
    <div class="right_col" role="main">
    <div class="col-md-12 text-center">
         <h1 class="display-1">Available Books</h1>
         <a href="/login" class="btn btn-success">SignUp/Login to Reserved a Book</a>
         <br><br>
        </div>


            <!-- page content -->
            @yield('content')
            <div class="container">
                <table class="table table-bordered shadow text-center table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th>Book ID</th>
                        <th>Book Title</th>
                        <th>Book Author</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <th>{{$post->id}}</th>
                        <th>{{$post->post_title}}</th>
                        <th>{{$post->post_author}}</th>
                    </tr>
                    </tbody>
                    @endforeach
                </table>

            </div> 
          </div>
</body>
</html>