@extends('/admin/index')
@section('content')
@include('/../errors')
	<div class="row">
		<div class="container">
			@foreach($categorys as $value)
				<a class="btn btn-link active colorwhite" href="{{ url('/categorys') .'/' .$value->alias }}">
					<h2>{{ $value->name }}</h2>
				</a>
				<table class="table table-hover">
				    <thead>
						<tr>
							<th>Name</th>
							<th>Alias</th>
							<th>Image</th>
							<th>Describe</th>
							<th>Video</th>
						</tr>
				    </thead>
				    <tbody>
				    	@foreach($data[$value->code] as $detail)
							<tr>
								<td><a class="btn btn-link active colorwhite" href="{{ url('/movie') .'/' .$detail->alias }}">{{ $detail->name }}</a></td>
								<td>{{ $detail->alias }}</td>
								<td>
									<div class="img_size"><img src="{{ asset('public/storage/imgs/' .$detail->image) }}"></div>
								</td>
								<td>{{ $detail->describe }}</td>
								<td>
									<div>{{  asset('public/storage/movies/' .$detail->movie_code .'.mp4') }}</div>
									<!-- <video class="img_size" controls preload='none' poster="{{ asset('public/storage/imgs/' .$detail->image) }}">
										<source src="{{  asset('public/storage/movies/' .$detail->movie_code .'.mp4') }}" type="video/mp4">
									</video> -->
								</td>
							</tr>
						@endforeach
				    </tbody>
				</table>
			@endforeach
		</div>
	</div>
@stop