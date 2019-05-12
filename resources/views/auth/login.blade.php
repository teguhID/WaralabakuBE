@extends('../auth/layout')
@section('content')
<body style="background-image: linear-gradient(to right,  #60a3bc, #ECF0F1);">
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
				<form autocomplete="off" class="login100-form validate-form" method="POST" action="{{ route('login') }}">	
					<span class="login100-form-title p-b-51">
						<img src="../../assets/img/logo.png" height="72" width="80" style="padding-bottom: 1.5vw"><br>
						Login
					</span>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is wrong">
						<input type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="email" required autofocus>
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
		<div class="fixed-bottom" style="z-index: -1;">
			<img src="../../assets/img/aladin.png" alt="aladin" width="600" height="600" style="opacity: 0.3; filter: alpha(opacity=50); padding-left: 5vw; padding-bottom: 3vw">
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
</body>
	@endsection