<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('css/login.css')}}">

	</head>
	<body class="img" style="background-image: url('/img/backgorund.png');">
	<section class="ftco-section">
		<div class="row">
			<img src="{{asset('/img/logo.png')}}" class="img-fluid" style="margin-top:-300px" alt="">
	</div>
		<div class="container" style=" margin-top:-150px;border: 20px solid #252540; border-style: ridge; border-radius:25px; width: 500px; background-color: rgba(36, 36, 137, 0.55);">
			<div class="row justify-content-center">
					<img src="{{asset('/img/logo.png')}}" class="img-fluid" style="margin-top: -200px; margin-left: -20px; padding-top:20px;" alt="">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4" style="margin-top:-180px;">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center" style="font-weight: bold;">LOGIN</h3>
				  
		      	<form action="{{ route('login.perform') }}"method="POST" class="signin-form" style="margin-left: -100px; width: 350px; padding-top: 10px;">
		      		<div class="form-group" style="padding-top: 10px;">
		      			<input type="text" name="username" value="{{ old('username') }}"class="form-control" placeholder="Username" required>
						  @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
		      		</div>
	            <div class="form-group" style="padding-top: 10px;">
	              <input name="password" value="{{ old('password') }}" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
				  @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
	            </div>
	            <div class="form-group" style="padding-top: 10px;">
	            	<button type="submit" class="form-control submit px-3" style="background-color:#252540; color: black;">LOGIN</button>
	            </div>
	            <div class="form-group d-md-flex text-center">
					<a style="margin-left: 50px; padding-bottom: 30px;"> Don't Have anny account?<a style="color: red;" href="/register">Register</a></a>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>

	</body>
</html>

