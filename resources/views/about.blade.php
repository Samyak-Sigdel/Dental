@extends('baseout')
@section('title', "about")
@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">

<div class="contain">
    <div class=" part1">
      <div class="text">
        <p>Welcome to Happy Smiles Dental, where we believe that a healthy smile is the key to a happy life! We are thrilled to introduce our state-of-the-art dental clinic dedicated to providing exceptional dental care and ensuring your comfort and satisfaction.
At Happy Smiles Dental, our passion for dentistry goes beyond mere treatment – it's about crafting experiences that leave lasting impressions. Our team of dedicated professionals is committed to not only enhancing your oral health but also revitalizing your confidence with every smile.

Step into our modern clinic, where innovation meets compassion. From the moment you walk through our doors, you'll be greeted by a warm and welcoming atmosphere designed to put you at ease. Our state-of-the-art facilities are equipped with the latest advancements in dental technology, ensuring precise diagnostics and personalized treatments tailored to your unique needs
     </p> </div>
      <div class="image-contain">
        <img src="{{ asset('images/a1.png') }}" alt="image">
        <img src="{{ asset('images/a2.png') }}" alt="image Cleaning">
        <img src="{{ asset('images/a3.png') }}" alt="image">
      </div>
    </div>

    @include( 'include.carasoal')

    <div class="part2">
      <div class="text">
        <p>
            Our mission at Happy Smiles Dental is more than just words; it's a commitment to excellence that drives everything we do. We believe in the power of a healthy smile to transform lives, and we're dedicated to delivering nothing short of exceptional dental care that exceeds your expectations.

With a focus on both oral health and aesthetic beauty, we offer a comprehensive range of services designed to address all your dental needs. Whether you're due for a routine check-up to maintain optimal oral hygiene, seeking cosmetic enhancements to perfect your smile, or in need of restorative procedures to regain function and confidence, our skilled team is here to provide personalized care tailored to your unique requirements.
        </p>
      </div>
      <div class="image-contain2">
        <img src="{{ asset('images/a4.png') }}" alt="image">
        <img src="{{ asset('images/a5.png') }}" alt="image">
      </div>
      <div class="text">
        <p>
            So why wait? Take the first step towards a healthier, happier smile today by scheduling your appointment at Happy Smiles Dental. Together, we'll embark on a journey towards optimal oral health and a lifetime of beautiful smiles. We can't wait to welcome you to our dental family and show you the difference that genuine care and passion for dentistry can make in your life.
        </p>
      </div>
    </div>
  </div>


  @endsection