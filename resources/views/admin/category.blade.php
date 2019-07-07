@extends('/admin/index')
@section('content')
@include('/../errors')
	<div class="container-fuild">
		<h2>{{ $infocate->name }}</h2>
		<table class="table table-hover">
		    <thead>
				<tr>
					<th>Name</th>
					<th>Image</th>
					<th>Describe</th>
					<th>Video</th>
				</tr>
		    </thead>
		    <tbody>
		    	@foreach($details as $detail)
					<tr>
						<td><a class="btn btn-link active colorwhite" href="{{ url('/movie') .'/' .$detail->alias }}">{{ $detail->name }}</a></td>
						<td>
							<div class="img_size"><img src="{{ asset('public/storage/imgs/' .$detail->image) }}"></div>
						</td>
						<td>{{ $detail->describe }}</td>
						<td>
							<video class="img_size" controls preload='none' poster="{{ asset('public/storage/imgs/' .$detail->image) }}">
								<source src="{{  asset('public/storage/movies/' .$detail->movie_code .'.mp4') }}" type="video/mp4">
							</video>
						</td>
					</tr>
				@endforeach
		    </tbody>
		</table>
	</div>

@stop