@extends('layouts.app')

@section('content')
<div class="container">
    <div class="all-from">
        <div class="cont">
            <div class="form sign-in">
                <h2>Welcome</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input_form">
                        <span for="email">{{ __('Email Address') }}</span>
                        <div>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span style="color:red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="input_form">
                        <span for="password">{{ __('Password') }}</span>
                        <div>
                            <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span style="color:red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="check_remember">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="others">
                        <button type="submit" class="submit">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </form>

            </div>
            <div class="sub-cont">
                <div class="img">
                    <div class="img__text m--up">

                        <h3>Don't have an account? Please Sign up!<h3>
                    </div>
                    <div class="img__text m--in">

                        <h3>If you already has an account, just sign in.<h3>
                    </div>
                    <div class="img__btn">
                        <span class="m--up">Sign Up</span>
                        <span class="m--in">Sign In</span>
                    </div>
                </div>
                <div class="form sign-up">
                    <h2>Create your Account</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="input_form">
                            <span for="name">{{ __('Name') }}</label>
                            <div>
                                <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span style="color:red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input_form">
                            <span for="email">{{ __('Email Address') }}</label>
                            <div>
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span style="color:red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input_form">
                            <span for="password">{{ __('Password') }}</span>
                            <div>
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span style="color:red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input_form">
                            <span for="password-confirm">{{ __('Confirm Password') }}</span>
                            <div>
                                <input id="password-confirm" type="password" " name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="others"> 
                                <button type="submit" class="submit">
                                    {{ __('Register') }}
                                </button> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('home/login.js')}}"></script>
@endsection