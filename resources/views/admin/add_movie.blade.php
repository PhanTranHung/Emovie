@extends('/admin/index')
@section('content')
@include('/../errors')
	<div class="container">
		<div>
			<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('add') }}">
				<fieldset>
					<!-- Form Name -->
					<legend>
						@if(session('message'))
							<div style="color: red">{{ session('message') }}</div>
						@else
							MOVIE
						@endif
					</legend>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="code">MOVIE CODE</label>  
						<div class="col-md-4">
						<input id="code" name="code" placeholder="MOVIE CODE" class="form-control input-md" required="" type="text" autofocus>
						</div>
					</div>
	
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="name">MOVIE TITLE</label>  
						<div class="col-md-4">
						<input id="name" name="name" placeholder="MOVIE TITLE" class="form-control input-md" required="" type="text">
						</div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="category">MOVIE CATEGORY</label>
						<div class="col-md-4" id="category">
							<div class="checkbox checkbox-info checkbox-circle form-chebox">
								<!-- <input type="hidden" name="category[]" value=""> -->
		                        <div>
		                        	<input id="checkbox1" type="checkbox" name="category[]" value="1">
		                        	<label for="checkbox1">Action</label>
		                        </div>
								<div>
			                        <input id="checkbox2" type="checkbox" name="category[]" value="2">
			                        <label for="checkbox2">Science Fiction</label>
								</div>
								<div>
			                        <input id="checkbox3" type="checkbox" name="category[]" value="3">
			                        <label for="checkbox3">Animation</label>
								</div>
								<div>
			                        <input id="checkbox4" type="checkbox" name="category[]" value="4">
			                        <label for="checkbox4">Horror</label>
								</div>
								<div>
			                        <input id="checkbox5" type="checkbox" name="category[]" value="5">
			                        <label for="checkbox5">Sports</label>
								</div>
								<div>
			                        <input id="checkbox6" type="checkbox" name="category[]" value="6">
			                        <label for="checkbox6">Anime</label>
								</div>
								<div>
			                        <input id="checkbox7" type="checkbox" name="category[]" value="7">
			                        <label for="checkbox7">Documentary</label>
								</div>
								<div>
			                        <input id="checkbox8" type="checkbox" name="category[]" value="8">
			                        <label for="checkbox8">Adventure</label>
								</div>
								<div>
			                        <input id="checkbox9" type="checkbox" name="category[]" value="9">
			                        <label for="checkbox9">Romance</label>
								</div>
								<div>
			                        <input id="checkbox10" type="checkbox" name="category[]" value="10">
			                        <label for="checkbox10">Family</label>
								</div>
	                    	</div>


						<!--  <select name="category" class="form-control">
							<option value='1'>Action</option>
							<option value='2'>Science Fiction</option>
							<option value='3'>Animation</option>
							<option value='4'>Horror</option>
							<option value='5'>Sports</option>
							<option value='6'>Anime</option>
							<option value='7'>Documentary</option>
							<option value='8'>Adventure</option>
							<option value='9'>Romance</option>
							<option value='10'>Family</option>
						</select> -->
						</div>
					</div>

					<!-- Textarea -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="description">MOVIE DESCRIPTION</label>
					  <div class="col-md-4">                     
					    <textarea class="form-control resizeoff" id="description" name="description"></textarea>
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="online_date">ONLINE DATE</label>  
						<div class="col-md-4">
						<input id="online_date" name="online_date" placeholder="ONLINE DATE" class="form-control input-md" required="" type="text">
						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="author">AUTHOR</label>  
						<div class="col-md-4">
						<input id="author" name="author" placeholder="AUTHOR" class="form-control input-md" required="" type="text">
						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  	<label class="col-md-4 control-label" for="approuved_by">APPROUVED BY</label>  
						<div class="col-md-4">
							<input id="approuved_by" name="approuved_by" placeholder="APPROUVED BY" class="form-control input-md" required="" type="text">
							<div class="margin">
								<!-- File Button --> 
								<div class="form-group">
								  <label class="col-md-4 control-label" for="img">Avatar</label>
								  <div class="col-md-4">
								    <input id="img" name="img" class="input-file" type="file">
								  </div>
								</div>
								<!-- File Button --> 
								<div class="form-group">
								  <label class="col-md-4 control-label" for="video">Video file</label>
								  <div class="col-md-4">
								    <input id="video" name="video" required class="input-file" type="file">
								  </div>
								</div>
							</div>
							<!-- Button -->
							<div class="form-group">
								<div class="col-md-4">
								<button id="singlebutton" name="singlebutton" required class="btn btn-primary" type="submit">Up load</button>
								</div>
							</div>
						</div>
					</div>
				</fieldset>
			</form>
			</div>
		</div>


	</div>
@stop
