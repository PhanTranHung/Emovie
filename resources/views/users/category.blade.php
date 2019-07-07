@extends('/users/index')
@section('content')
@include('/../errors')
    <link rel="stylesheet" type="text/css" href="{{ url('public/users/css/set1.css') }}" />
    <div class="text-center color-white">
    	<h2>{{$infocate->name}}</h2>
    </div>
	@foreach($datas as $data)
		<div class="row"">
		@foreach($data as $row)
			<div class="col-sm ">
				<a href="{{ route('uwatch', ['movie'=>$row->alias]) }}">
					<div class="grid">
						<figure class="effect-zoe">
							<img src="{{asset('public/storage/imgs/' .$row->image)}}" alt="img24"/>
							<figcaption>
								<h6 class='color-black'>{{$row->name}}</h6>
							</figcaption>			
						</figure>
					</div>
				</a>
			</div>
		@endforeach
		</div>
	@endforeach
@stop

