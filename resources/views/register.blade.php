<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="{{asset('fonts/linearicons/style.css')}}">
       
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('css/regis.css')}}">
	</head>

	<body>
		
		<div class="wrapper">
			<div class="row">
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-2">
						<img src="{{asset('/img/logo.png')}}" style="margin-top: -200px; margin-left: -150px;"class="img-" alt="">
						</div>
					</div>
					<img src="{{asset('/img/Car_Care_2.png')}}" class="img-cover"  style="width: 900px; margin-left: -80px; margin-top: -200px;"alt="">
				</div>
			<div class="col-sm-8">
			<div class="inner">
				<form action="{{ route('register.perform') }}" method="post">
					{{ csrf_field() }}
						<img src="{{asset('/img/logo.png')}}" style="margin-top:-170px;" alt="">
					<h3>REGISTRATION</h3>
					<div class="form-holder">
						<span class="lnr lnr-envelope" style="color: white;"></span>
						<input type="text" class="form-control" placeholder="email"  value="{{ old('email') }}">
						@if ($errors->has('email'))
               			<span class="text-danger text-left">{{ $errors->first('email') }}</span>
           				@endif
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user" style="color: white;"></span>
						<input type="text" class="form-control" placeholder="Username" value="{{ old('username') }}">
						@if ($errors->has('username'))
             		   <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            			@endif
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"style="color: white;"></span>
						<input type="password" class="form-control" placeholder="Password" value="{{ old('password') }}" >
						@if ($errors->has('password'))
               			<span class="text-danger text-left">{{ $errors->first('password') }}</span>
            			@endif
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock" style="color: white;"></span>
						<input type="password" class="form-control" placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
						@if ($errors->has('password_confirmation'))
              		  	<span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
         			   @endif
					</div>
					<input type="submit" placeholder="Submit"/>
				</form>
			</div>
			
		</div>
		</div>
		</div>
		
		
		<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>