@extends('layout')
@section('title', "main page")
@section('content')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

<div class="container">
    <div class="box">
        <h2 class="welcome-msg">Happy Smiles Dental </h2>
        <p style="font-family: 'Libre Franklin'; font-size: 20px;">Bringing joy to your smile</p><br><br>
        <button class="btn btn-login" ><a href="{{ route('login') }}">Login</a></button>
        <button class="btn btn-signup"><a href="{{ route('register') }}">Register</a></button>
    </div>
</div>
    
@endsection 