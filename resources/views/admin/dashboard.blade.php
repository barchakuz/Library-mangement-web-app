@extends('admin.layout')
@section('content')
<h1>Dashboard Page</h1>
<ul>
        <li><a href="{{asset('admin')}}">Admin</a></li>
        <li><a href="{{asset('log')}}">LogIn/SignIn</a></li>
        <li><a href="{{asset('book')}}">Books</a></li>
        <li><a href="{{asset('/')}}">Home</a></li>
        <h1>COMSATS Library Management System</h1>

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
@endsection
