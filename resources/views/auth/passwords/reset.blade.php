@extends('layouts.app')

@section('content')
    <div class="login-container">
        <div class="card">
            <div class="card-header">{{ __('Reset Password') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="email_address">
                        <label for="email" class="reset_label_email">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="login_input_email @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="password_div">
                        <label for="password" class="reset_label_pass">{{ __('Password') }}</label>
                        <input id="password" type="password" class="login_input_password @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="pass_confirm">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="login_input_password" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="btn-register">
                        <button type="submit" class="primary-btn">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
