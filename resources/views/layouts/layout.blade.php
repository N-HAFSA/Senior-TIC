<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Senior</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/resources/img/favicon.png')}}" rel="icon">
  <link href="{{asset('/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

  <!-- Template Main CSS File -->
  <link href="{{asset('/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{asset('/img/logo.png')}}" alt="">
        <span>Senior</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('employes.index') }}">Employes</a></li>
          <li><a class="nav-link scrollto" href="{{ route('services.index') }}">Services</a></li>
          <li><a class="getstarted scrollto" href="{{ route('orders.index') }}">Place Order</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <div class="jumbotron text-center">
  <h1>.......</h1>
  </div>
  

  <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

<div class="container" data-aos="fade-up">

  @yield('header')
  
  <div class="row gy-4">
    <div  data-aos="fade-up" data-aos-delay="200">
      <div class="service-box ">

       @yield('content')

      </div>
    </div>
  </div>
</div>

</section><!-- End Services Section -->

  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer"  class=" footer jumbotron text-center" style="margin-bottom:0">
    @yield('footer')
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <script src="{{asset('/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/vendor/glightbox/js/glightbox.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/js/main.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#table').DataTable();
  } );
  </script>

</body>

</html>

 