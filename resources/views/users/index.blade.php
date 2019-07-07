<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="shortcut icon" href="{{ url('public/users/img/e_icon.png') }}"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('public/users/css/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ url('public/users/css/owl.theme.default.min.css') }}">
    <title>E-Movies</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('public/users/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/users/css/user.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ url('public/users/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('public/users/css/grayscale.css') }}" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <link rel="stylesheet" type="text/css" href="{{ url('public/users/css/normalize.css') }}" />
    <!-- <link rel="stylesheet" type="text/css" href="{{ url('public/users/css/set2.css') }}"> -->
  </head>

  <body id="page-top">
    

    @include('users/header')
    <!-- Header -->

    <header class="" style="background-color: #161616">
      <section id="home">
        <video class="video1" src="{{ url('public/users/video/a2.mp4') }}" poster="{{ url('public/users/video/a9.png') }}" preload="" style="width: 100%; height: auto;"></video>
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="{{ url('public/users/js/video-hover1.js') }}"></script>
      </section>
    </header>

    <section class="bg-black container-fluid">
      @yield('content')
    </section>

    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">

        <div class="social d-flex justify-content-center">
          <a href="https://www.facebook.com/" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.facebook.com/" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.facebook.com/" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>
      </div>
      @include('users/footer')
    </section>

    <!-- Footer -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ url('public/users/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('public/users/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ url('public/users/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ url('public/users/js/grayscale.min.js') }}"></script>
    <script src="{{ url('public/users/js/jquery.min.js') }}"></script>
    <script src="{{ url('public/users/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      $(".owl-carousel").owlCarousel();
      });
    </script>
    <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
      rtl:true,
      loop:true,
      margin:10,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
      }
      })
    </script>

  </body>
</html>
