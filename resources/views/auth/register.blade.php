@extends('../auth/layout')
@section('content')
	<div class="limiter">
		<div class="fixed-top" style=" ">
			<form action={{ __('login') }} style="padding: 2vw; right: 0; position: absolute;">
				<button type="submit" class="btn btn-outline-success">
					<span class="lnr lnr-home" style="padding-right: 0.5vw;"></span> Login
				</button>
			</form>
		</div>
		<div class="container-login100">
			<div class="p-t-50 p-b-90">
				<form class="login100-form validate-form" autocomplete="off" method="POST" action="{{ route('register') }}">
					<span class="login100-form-title p-b-51">
						Register
					</span>
                    @csrf
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input id="name" type="text" class="input100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="name" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
						<span class="focus-input100"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input id="email" type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="email" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						<span class="focus-input100"></span>
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

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input id="password-confirm" type="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="confirm password" required>
						<span class="focus-input100"></span>
						@if ($errors->has('password'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
                    </div>

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" class="login100-form-btn">
                            {{ __('Register') }}
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
	@endsection
