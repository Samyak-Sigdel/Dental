@extends('layout')
@section('title', 'login')
@section('content')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<div class="container">
    <div class="row mt-5">
        @if($errors->any())
            <div class="col-12">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

            <div class="image-container">
                <img src="{{ asset('images/d1.jpg') }}" alt="Dental Image">
            </div>
    
            <div class="login-container">
                <h2>Welcome Back</h2>
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" value="Login">
                </form>
                <p>Not a Member? <a href="{{ route('register') }}">Register</a></p>
                <div>
                    <p>or</p>
                    <p><a href="#">Continue without login</a></p>
                </div>
            </div>
    </div>
</div>
@endsection
