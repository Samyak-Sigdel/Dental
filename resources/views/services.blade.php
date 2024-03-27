@extends('baseout')
@section('title', "home page")
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/services.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 
<h1 style="text-align: center;">Services that we provide</h1>


<div class="contain">
  <div class="service"  style="background-color: rgb(182, 182, 182)">
    <img src="{{ asset('images/dentalcleaning.png') }}" alt="Dental Cleaning">
    <div class="text">
      <h2  style="color: #f0f0f0;">Dental Cleaning</h2>
      <p style="color: #f0f0f0;">Regular dental examinations and cleanings are essential for maintaining oral health, preventing decay, detecting issues early, and achieving a sparkling, fresh smile.Regular dental examinations and cleanings play a fundamental role in preventing various oral health issues, including tooth decay, gum disease, and bad breath. These routine appointments are typically recommended every six months, although frequency may vary based on individual dental needs and conditions.</p>
    </div>
  </div>

  <div class="service">
    <img src="{{ asset('images/d2.jpg') }}" alt="Root Canal Treatment">
    <div class="text">
      <h2>Root Canal Treatment</h2>
      <p>Root canal treatment, also known as endodontic therapy, is a dental procedure aimed at saving teeth that have become infected or damaged deep within the pulp, the innermost part of the tooth. This treatment is necessary when the pulp tissue becomes inflamed or infected due to decay, injury, or other dental issues.Root canal treatment saves infected or damaged teeth by removing the pulp, cleaning the root canal, and sealing it to prevent further infection or pain.</p>
    </div>
  </div>

  <div class="service" style="background-color:#aaa2a2; padding-bottom: 30px; margin-bottom: 0cap;"  >
    <img src="{{ asset('images/bbr.png') }}" alt="Braces">
    <div class="text">
      <h2 style="color: #f0f0f0;">Braces</h2>
      <p style="color: #f0f0f0;">Braces are a transformative dental treatment renowned for their ability to align teeth and correct misalignments, thereby enhancing both dental health and aesthetic appeal. Through the strategic placement of brackets and wires, braces exert gentle pressure on the teeth, gradually guiding them into their optimal positions.Braces align teeth and correct misalignments, improving dental health and creating beautiful smiles through the use of brackets and wires.</p>
    </div>
  </div>
<!-- 
  <div class="service"  style="background-color:rgb(155, 155, 155);">
    <img src="fillings.jpg" alt="Implants" >
    <div class="text">
      <h2>Implants</h2>
      <p>Dental implants stand as a revolutionary solution in modern dentistry, offering a permanent and highly effective method for replacing missing teeth. These titanium posts are surgically implanted into the jawbone, serving as sturdy anchors for artificial teeth such as crowns, bridges, or dentures. Beyond the aesthetic benefits of filling gaps in the smile, dental implants provide numerous advantages that contribute to enhanced oral health and overall well-being.Dental implants replace missing teeth, providing a natural-looking and functional solution for improved oral health and confident smiles.</p>
    </div>
  </div> -->

  <div class="service">
    <img src="{{ asset('images/filings.png') }}" alt="Fillings">
    <div class="text">
      <h2>Fillings</h2>
      <p>Dental fillings play a crucial role in preserving the integrity of teeth affected by decay or damage, offering a reliable solution to restore both function and aesthetics. Comprised of various materials such as amalgam, composite resin, gold, or porcelain, fillings are carefully placed by dentists to fill cavities and reinforce weakened tooth structures. This process not only halts the progression of decay but also prevents further damage, ultimately promoting optimal oral health and a confident smile.Dental fillings restore and strengthen decayed or damaged teeth, preventing further decay and restoring proper function for a healthy smile.</p>
    </div>
  </div>

  <div class="service" style="background-color: #343a40;">
    <img src="{{ asset('images/crownsbridges.png') }}" alt="Crowns and Bridges">
    <div class="text">
      <h2 style="color: #f0f0f0;">Crowns and Bridges</h2>
      <p style="color: #f0f0f0;">
          Crowns and bridges represent two essential pillars of restorative dentistry, offering versatile solutions for addressing damaged or missing teeth and enhancing overall oral health. These prosthetic dental devices serve diverse purposes, from strengthening weakened teeth to replacing missing ones, ultimately restoring both function and aesthetics for a confident and healthy smile.Crowns and bridges are prosthetic dental solutions that restore damaged or missing teeth, improving aesthetics, function, and overall oral health.</p>
    </div>
  </div>
</div>


@endsection   