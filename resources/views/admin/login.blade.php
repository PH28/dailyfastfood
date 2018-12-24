<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>from Login</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('admin/css/login.css')}}">
</head>
<body>
<video id="video_background" preload="auto" autoplay="true" loop="loop" muted volume="0">
            <source src="{{asset('admin/video/keyboard.webm')}}" type="video/webm"/>
            <source src="{{asset('admin/video/keyboard.ogv')}}" type="video/ogg ogv"; codecs="theora, vorbis"/>
            <source src="{{asset('admin/video/keyboard.mp4')}}" type="video/mp4"/>
    </video>
<div id="div_top" class="form-group">
		</div>
		<div id=form_login>
			<form method="POST" action="{{ route('adminlogin') }}">
				<center><h2 style="color: yellow; padding:20px 0;">LOGIN NOW</h2></center>
				<!--  <i class="fa fa-user icon"></i> -->
				 @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

				<!-- <i class="fa fa-key icon"></i> -->
				<div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6 text-danger">


                                @if (session('login_errors'))

                                        <strong>{{ session('login_errors') }}</strong>

                                @endif
                            </div>
                        </div>  
				<div class="checkbox ml-5">
				<label for="" >
					<input type="checkbox" class="form-check-input " name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} > Remember me

				</label>
				<a href="{{ route('password.request') }}" style="float: right; padding-right: 50px;">Forgot Your Password</a>
				 <!-- @if (Route::has('password.request'))
                          <a class="btn btn-link float-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
				</div>
						<center> 
							<button type="submit" value="" class="btn btn-danger ">LOGIN</button>
						<button type="reset" class="btn btn-primary">Cancel</button>
				<input type="hidden" name="action" value="checkuser"></center>
			</form>
		</div>
</body>
</html>