@extends('baseout')
@section('title', "home page")
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">

<div class="container">
        <div id="welcome">
            <div id="text-container"> 
                <h1>Welcome to Happy Smiles Dental</h1>
                <p>Welcome to Happy Smiles Dental Clinic,Where we believe that a healthy smile is the key to a happy life!. Our team of experienced dentists and hygienists provides a comprehensive range of services, including routine cleanings, fillings, root canals, and cosmetic procedures, using the latest technology and techniques to deliver exceptional results. Equipped with state-of-the-art equipment and adhering to strict sterilization protocols, we prioritize safety and hygiene in every aspect of our practice. Whether you're due for a check-up or seeking to enhance your smile, our dedicated staff is committed to delivering personalized care tailored to your unique needs.</p>
            </div>
            <div>
                <img src="{{ asset('images/DENTAL.jpeg') }}" alt="Happy Smiles Dental Clinic" id="welcome-image">
            </div>
        </div>
    </div>

    <div id="services">
        <h2>Our Services</h2>
        <ul>
            <li>
                <img src="{{ asset('images/cleaning.jpg') }}" alt="Regular Checkups and Cleanings">
                <p>Regular Checkups and Cleanings</p>
            </li>
            <li>
                <img src="{{ asset('images/crowns.jpg') }}" alt="Teeth Whitening">
                <p>Teeth Whitening</p>
            </li>
            <li>
                <img src="{{ asset('images/fillings.jpg') }}" alt="Fillings and Restorations">
                <p>Fillings and Restorations</p>
            </li>
            <li>
                <img src="{{ asset('images/implants.jpg') }}" alt="Dental Implants">
                <p>Dental Implants</p>
            </li>
            <li>
                <img src="{{ asset('images/braces.jpg') }}" alt="Orthodontics">
                <p>Orthodontics</p>
            </li>
            <li>
                <img src="{{ asset('images/rct.jpg') }}" alt="Root Canal Treatment">
                <p>Root Canal Treatment</p>
            </li>
        </ul>
    </div>



@endsection    