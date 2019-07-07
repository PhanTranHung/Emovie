<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div style="height: 150px">
		
	</div>
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Login page for adminitrator</div>

	                <div class="card-body">
	                    <form method="POST" action="{{ route('login') }}">
	                        @csrf

	                        <div class="form-group row">
	                            <label for="acc" class="col-sm-4 col-form-label text-md-right">Account</label>

	                            <div class="col-md-6">
	                                <input id="acc" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="acc" value="{{ old('email') }}" required autofocus>

	                                @if ($errors->has('email'))
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

	                            <div class="col-md-6">
	                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="pass" required>

	                                @if ($errors->has('password'))
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <div class="col-md-6 offset-md-4">
	                                <div class="form-check">
	                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

	                                    <label class="form-check-label" for="remember">
	                                        {{ __('Remember Me') }}
	                                    </label>
	                                </div>
	                            </div>
	                        </div>

	                        <div class="form-group row mb-0">
	                            <div class="col-md-8 offset-md-4">
	                                <button type="submit" class="btn btn-primary">
	                                    {{ __('Login') }}
	                                </button>

	                                @if (Route::has('password.request'))
	                                    <a class="btn btn-link" href="{{ route('password.request') }}">
	                                        {{ __('Forgot Your Password?') }}
	                                    </a>
	                                @endif
	                            </div>
	                        </div>
	                    </form>
	                    {{ $error ?? '' }}
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</body>
</html>