<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('theme\css\index.css')}}">

    <title>Home Page</title>
</head>
<body>
<ul class="home-m">
        <li class="home-x"><a href="{{asset('admin')}}">Admin</a></li>
        <li class="home-x"><a href="{{asset('login')}}">LogIn/SignIn</a></li>
        <li class="home-x"><a href="{{asset('book')}}">Books</a></li>
        <li class="home-x"><a href="{{asset('/')}}">Home</a></li>
        <h1 class="home-x">COMSATS Cinima Management System</h1>

</ul>
    <div class="slider">

    </div>
<div>
    <h1 class="about">About US</h1>
    <div class="a">
        <div class="info">
            <h2>Behroze Aslam</h2>
            <h3>behroze.barcha@gmail.com</h3>
            <h3><img src="img/home/m1" alt="behroze"></h3>
        </div>
        <div class="info">
            <h2>mohsin haider</h2>
            <h3>mxy@gmail.com</h3>
            <h3><img src="img/home/m2" alt="mohsin"></h3>
        </div>
        <div class="info">
            <h2>sofia haider</h2>
            <h3>sxyz@gmail.com</h3>
            <h3><img src="img/home/m3" alt="sofia"></h3>
        </div>
        </div>    
</div>  

</body>
</html>