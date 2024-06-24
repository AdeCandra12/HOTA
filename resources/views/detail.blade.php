<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

     {{-- css --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     {{-- js --}}
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
     <style>
        #map {height: 500px;}
    </style>

  <title>HoTa - Hotel Kita</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <main id="main">

    <!-- Hero Section - Home Page -->
    {{-- <section id="hero" class="hero">

      <img src="{{ asset('assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Welcome to HoTa</h2>
            <p data-aos="fade-up" data-aos-delay="200">Kami Menyediakan Semua Penginapan di Kota Bandung</p>
          </div>
          <div class="col-lg-5">
            <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
              <input type="text" class="form-control" placeholder="Enter email address">
              <input type="submit" class="btn btn-primary" value="Sign up">
            </form>
          </div>
        </div>
      </div>

    </section> --}}
    {{-- start map --}}
{{-- <section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="map"></div>
    </div>
</section>
<section> --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1 class="card-title" style="font-size: 2.5rem; color: #000000;">{{ $hotel->nama }}</h1>
            <br>
            <p class="card-text"><img src="{{asset('storage/'.$hotel->foto_hotel)}}" alt="" width="500px"></p>
            <p class="card-text"><strong>deskripsi:</strong> {{ $hotel->deskripsi }}</p>
            <p class="card-text"><strong>Alamat:</strong> {{ $hotel->alamat }}</p>
            <p class="card-text"><strong>Rating:</strong> {{ $hotel->rating }}</p>
            <p class="card-text"><strong>Kamar:</strong> {{ $hotel->type_kamar }}</p>
            <p class="card-text"><strong>Fasilitas:</strong> {{ $hotel->fasilitas }}</p>
            <p class="card-text"><strong>Latitude:</strong> {{ $hotel->latitude }}</p>
            <p class="card-text"><strong>Longitude:</strong> {{ $hotel->longitude }}</p>
          </div>
          <div id="map" style="height: 400px; margin-bottom: 20px; margin-bottom:10px"></div>
          <div class="col-md-5">
            <a href="{{ route('welcome') }}" class="btn btn-secondary">Kembali</a>
          </div>
    </div>
</section>


    </section><!-- End Services Section -->
{{-- 
    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1">HoTa</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div> --}}

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>

  {{-- ini script map --}}

<script>
    var map = L.map('map').setView([-6.899011509193941, 107.6143129887648], 15); // Set the view to Bandung (Gedung Sate)

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
        L.marker([{{ $hotel->latitude }}, {{ $hotel->longitude }}])
            .addTo(map)
            .bindPopup('{{ $hotel->nama }}');

</script>

</body>

</html>