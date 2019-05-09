<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Center Waralabaku</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href={{ asset('assets/img/icons/favicon.ico') }}/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/animate/animate.css') }}>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/animsition/css/animsition.min.css') }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/select2/select2.min.css') }}>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ asset('assets/css/util.css') }}>
	<link rel="stylesheet" type="text/css" href={{ asset('assets/css/main.css') }}>
<!--===============================================================================================-->
</head>
<body style="background-image: linear-gradient(#f3f1ef, #bdc3c7);">
	
	<div class="limiter">
		<div class="fixed-top" style=" ">
			<form action={{ __('register') }} style="padding: 2vw; right: 0; position: absolute;">
				<button type="submit" class="btn btn-outline-success">
					<span class="lnr lnr-pencil" style="padding-right: 0.5vw;"></span> Register
				</button>
			</form>
		</div>
		<div class="container-login100">
			<div class="p-t-50 p-b-90">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
					<span class="login100-form-title p-b-51">
						Login
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="email" required autofocus>
						<span class="focus-input100"></span>
						@if ($errors->has('email'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input type="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>
						<span class="focus-input100"></span>
						@if ($errors->has('password'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
					</div>


					<div class="container-login100-form-btn m-t-17">
						<button type="submit" class="login100-form-btn">
								Login
						</button>
					</div>

				</form>
			</div>
		</div>
		<div class="fixed-bottom" style="padding: 2vw; color: #34495e;">
			<span class="lnr lnr-apartment">
				<span style="font-size: 18px; font-family: Verdana, Geneva, Tahoma, sans-serif">
					Data Center Waralabaku
				</span>
			</span>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src={{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}></script>
<!--===============================================================================================-->
	<script src={{ asset('assets/vendor/animsition/js/animsition.min.js') }}></script>
<!--===============================================================================================-->
	<script src={{ asset('assets/vendor/bootstrap/js/popper.js') }}></script>
	<script src={{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}></script>
<!--===============================================================================================-->
	<script src={{ asset('assets/vendor/select2/select2.min.js') }}></script>
<!--===============================================================================================-->
	<script src={{ asset('assets/vendor/daterangepicker/moment.min.js') }}></script>
	<script src={{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}></script>
<!--===============================================================================================-->
	<script src={{ asset('assets/vendor/countdowntime/countdowntime.js') }}></script>
<!--===============================================================================================-->
	<script src={{ asset('assets/js/main.js') }}></script>

</body>
</html>