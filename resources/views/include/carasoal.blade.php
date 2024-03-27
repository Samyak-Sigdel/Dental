  <!-- Slideshow container -->
<!-- 
  <link rel="stylesheet" href="{{ asset('css/carasoal.css') }}">
  <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="{{ asset('images/i1.jpg') }}" alt="Slide 1">
        </div>
        <div class="mySlides fade">
            <img src="{{ asset('images/i2.jpg') }}" alt="Slide 2">
        </div>
        <div class="mySlides fade">
            <img src="{{ asset('images/i3.jpg') }}" alt="Slide 3">
        </div>
        <div class="mySlides fade">
            <img src="{{ asset('images/i4.jpg') }}" alt="Slide 4">
        </div>
        <div class="mySlides fade">
            <img src="{{ asset('images/i5.jpg') }}" alt="Slide 5">
        </div>
        <div class="mySlides fade">
            <img src="{{ asset('images/i6.jpg') }}" alt="Slide 6">
        </div>

      
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

 
    <div style="text-align:center" class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
    </div>


    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            const slides = document.getElementsByClassName("mySlides");
            const dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script> -->

    


<div id="carouselExampleFade" class="carousel slide carousel-fade">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.unsplash.com/photo-1606811971618-4486d14f3f99?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="https://media.istockphoto.com/id/1542688717/photo/father-teaching-son-to-brush-teeth.jpg?s=2048x2048&w=is&k=20&c=DpFCRA_CnDtx1F8lDEDPqUQmgwhiE5AnLmSGVCuek7U=" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://media.istockphoto.com/id/1512069065/photo/mature-woman-having-teeth-examined-by-a-dentist-at-her-office.jpg?s=2048x2048&w=is&k=20&c=-GyiZubEbJ9bBe0zTnCJOe1blzwpFlMUYi2eXPpKF68=" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <script>
    $(document).ready(function(){
      $('#carouselExampleFade').carousel({interval: 1000}); // 2000 milliseconds = 2 seconds
    });
  </script>
  