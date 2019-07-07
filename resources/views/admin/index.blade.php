<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="shortcut icon" href="{{ url('public/users/img/e_icon.png') }}"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="{{ url('public/css/slidebar_navigation.css') }}">
	<script type="text/javascript" src="{{ url('public/js/slidebar_navigation.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ url('public/css/admincss.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('public/css/checkbox.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body class="background">
	<div id="wrapper">
        <div class="overlay"></div>
		@include('/../slidebar_navigation')
		<div class="index100">
			<div class="homebutton">
	        	<a class="colorblack" href="{{ route('homepage') }}">
	        		<i class="fa fa-home fa-3x" aria-hidden="true"></i>
	        	</a>
	        	<div class="colorwhite">Home page</div>
	    	</div>
			<div class="addbutton">
	        	<a class="colorblack" href="{{ route('add') }}">
	        		<i class="fa fa-plus fa-3x" aria-hidden="true"></i>
	        	</a>
	        	<div class="colorwhite">Add movie</div>
	    	</div>
		</div>


        <!-- Page Content -->
        <div id="page-content-wrapper" class=''>
            <button type="button" class="hamburger is-closed " data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
				<section class="row">
					@yield('content')
				</section>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>
</html>