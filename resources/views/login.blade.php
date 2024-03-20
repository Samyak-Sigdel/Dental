@extends('layout')
@section('title', 'login')
@section('content')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<div class="container">
    <div class="image-container">
        <img src="{{ asset('images/d1.jpg') }}" alt="Dental Image">
    </div>
    <div class="login-container">
        <h2>Welcome Back</h2>
        <form action="#" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        <p>Not a Member? <a href="#">Register</a></p>
        <div>
            <p>or</p>
            <p><a href="#">Continue without login</a></p>
        </div>
    </div>
</div>
@endsection