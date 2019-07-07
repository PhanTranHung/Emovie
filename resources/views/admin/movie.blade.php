@extends('/admin/index')
@section('content')
@include('/../errors')
	<div class="container-fuild">
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
			</div>
			<div class="col-sm-4">
				<h3>Description</h3>
				<div class="col-sm-3"></div>
				<div class="col-sm-9">
					<div>{{ $film->describe }}</div>
				</div>
			</div>
		</div>
	</div>

@stop