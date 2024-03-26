  <!-- Slideshow container -->
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

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- Dots -->
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
    </script>
