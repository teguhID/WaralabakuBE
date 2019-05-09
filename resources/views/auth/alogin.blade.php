@extends('../auth/layout')
@section('title')
    Login
@endsection
@section('content')
                
          <div class="col-sm">
          </div>
          <div class="col-sm">
      
            <form method="POST" action="{{ route('login') }}">
                @csrf
        
                <div class="">
                    <label for="email" class="">{{ __('E-Mail') }}</label>
        
                    <div class="">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
        
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
        
                <div class="">
                    <label for="password" class="">{{ __('Password') }}</label>
        
                    <div class="">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
        
                <div class="">
                    <div class="">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <a href={{ __('register') }}>Register</a>
                    </div>
                </div>
            </form> 

          </div>
          <div class="col-sm">
    
@endsection