@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="card">
        <div class="card-header">{{ __('Register') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="name_div">
                    <label for="name" class="login_email_label">{{ __('Name') }}</label>
                    <input id="name" type="text" class="login_input_email @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="email_div">
                    <label for="email" class="login_email_label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="login_input_email @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="pass_div">
                    <label for="password" class="login_pass_label">{{ __('Password') }}</label>


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
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
