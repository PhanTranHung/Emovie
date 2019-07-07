<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="shortcut icon" href="{{ url('public/users/img/e_icon.png') }}"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{ url('public/users/css/owl.carousel.min.css') }}">
	   <link rel="stylesheet" href="{{ url('public/users/css/owl.theme.default.min.css') }}">
    <title>E-Movies</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('public/users/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ url('public/users/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('public/users/css/grayscale.css') }}" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="font-size: 40px;">E - Movies</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#films">Films</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->

    <header class="" style="background-color: #161616">
      <section id="home">
        <video class="video1" src="{{ url('public/users/video/a2.mp4') }}" poster="{{ url('public/users/video/a9.png') }}" preload="" style="width: 100%; height: auto;"></video>
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="{{ url('public/users/js/video-hover1.js') }}"></script>
      </section>
    </header>

    <!-- About Section -->
    @foreach($categorys as $value)
    <section id="films" class="about-section text-center">
      <div class='text-left'>
        <a href="{{ url('/categorys') .'/' .$value->alias }}">
          <h3>{{ $value->name }}</h3>
        </a>
      </div>
      <div class="owl-carousel owl-theme">
        @foreach($data[$value->code] as $detail)
        <div class="item">
          <img src="{{ asset('public/storage/imgs/' .$detail->image) }}">
          <h4>{{ $detail->name }}</h4>
        </div>
        @endforeach
      </div>
    </section>
    @endforeach

    <!-- Signup Section -->
    <section id="signup" class="signup-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
            <h2 class="text-white mb-5">Subscribe to updates on the latest movies</h2>

            <form class="form-inline d-flex">
              <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
              <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
            </form>

          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section bg-black">
     	<div class="container">

	        <div class="row">

	          <div class="col-md-4 mb-3 mb-md-0">
	            <div class="card py-4 h-100">
	              <div class="card-body text-center">
	                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
	                <h4 class="text-uppercase m-0">Address</h4>
	                <hr class="my-4">
	                <div class="small text-black-50">41 Le Duan Street, Da Nang VN</div>
	              </div>
	            </div>
	          </div>

	          <div class="col-md-4 mb-3 mb-md-0">
	            <div class="card py-4 h-100">
	              <div class="card-body text-center">
	                <i class="fas fa-envelope text-primary mb-2"></i>
	                <h4 class="text-uppercase m-0">Email</h4>
	                <hr class="my-4">
	                <div class="small text-black-50">
	                  <a href="https://mail.google.com/mail/u/0/#inbox">emovies@gmail.com</a>
	                </div>
	              </div>
	            </div>
	          </div>

	          <div class="col-md-4 mb-3 mb-md-0">
	            <div class="card py-4 h-100">
	              <div class="card-body text-center">
	                <i class="fas fa-mobile-alt text-primary mb-2"></i>
	                <h4 class="text-uppercase m-0">Phone</h4>
	                <hr class="my-4">
	                <div class="small text-black-50">03 2701 2792</div>
	              </div>
	            </div>
	          </div>
	        </div>

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
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; Thiendo & Tranhung
    	</div>
		</footer>
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
