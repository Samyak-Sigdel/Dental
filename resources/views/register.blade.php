@extends('layout')
@section('title', 'register')
@section('content') 
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
<div class="container">

  <div class="mt-5">
    @if($errors->any())
      <div class="col-12">
        @foreach($errors->all() as $errors)
        <div class="alert alert-danger">{{$error}}</div>
        @endforeach
      </div>
    @endif

    @if(session()->has('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    @if(session()->has('sucess'))
    <div class="alert alert-success">{{session('sucess')}}</div>
    @endif


  </div>

    <div class="registration-container">
      <h2>Register</h2>
      <form action="{{route('register.post')}}" method="POST">
      @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="submit" value="Register">
      </form>
      <p> By clicking Register you agree on  our <a href="#">Privacy policy</a></p>
      <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
  </div>
@endsection
