<!-- <link rel="stylesheet" href="{{ asset('css/header.css') }}">
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul> -->
<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
  <div class="container">
    <a class="navbar-brand navbar-brand-custom" href="#">
    <img src="{{ asset('images/l2.jpg') }}"style="width: 200px; height: 100px;" alt="Logo "></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link nav-link-custom" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom" href="{{ route('services') }}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-custom" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
