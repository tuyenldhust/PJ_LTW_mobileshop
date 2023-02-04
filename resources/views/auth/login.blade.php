@extends('layouts.app')

@section('content')
    <div class="login-container">
        <div class="card">
            <div class="card-header">{{ __('Login') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="email_div">
                        <label for="email" class="login_email_label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="login_input_email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="pass_div">
                        <label for="password" class="login_password_label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="login_input_password @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="checkbox_remember">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                    </div>

                    <div class="login_forgot_pass">
                        <button type="submit" class="primary-btn">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="secondary-btn" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
