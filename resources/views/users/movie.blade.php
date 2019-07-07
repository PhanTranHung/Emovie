<!DOCTYPE html>
<html>
<head>
	<title></title>
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
</head>
<body class="bg-dark">
	
	@include('/../errors')
	@include('/users/header')
    <link rel="stylesheet" type="text/css" href="{{ url('public/users/css/set1.css') }}" />
	<div class="container-fuild">
		<div style="height: 150px"></div>
		<h2>{{ $film->name }}</h2>
		<div class="row">
			<div class="col-sm-8">
				<video class="maxwidth" controls preload="none" poster="{{ asset('public/storage/imgs/' .$film->image) }}">
					<source src="{{  asset('public/storage/movies/' .$film->movie_code .'.mp4') }}" type="video/mp4">
				</video>
			</div>
			<div class="col-sm-4">
				<h3>Categorys</h3>
				<div class="col-sm-3"></div>
				<div class="col-sm-9">
					@foreach($detailscate as $value)
						<div><a class="btn btn-link active colorwhite" href="{{ url('/categorys') .'/' .$value->alias }}">{{ $value->name }}</a></div>
					@endforeach
				</div>
				<br/>
				<h3>Description</h3>
				<div class="col-sm-3"></div>
				<div class="col-sm-9">
					<div>{{ $film->describe }}</div>
				</div>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div>

	@include('/users/footer')

</body>
</html>