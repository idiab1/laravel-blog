@extends('layouts.app')

{{-- Title --}}
@section('title') {{__('Login')}} @endsection

{{-- Style --}}
@section('styles')
    <style>
        body{
            background : #213159;
        }
    </style>
@endsection

{{-- Header --}}
@section('header')

@endsection

{{-- Content --}}
@section('content')

<div class="sign-form">
    <div class="row">
        <div class="col-12">
            <div class="sign-info text-center">
                <h2 class="heading">Welcome back</h2>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="sign-form-container">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="sign-form-box">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Email -->
                                <div class="form-group">
                                    <label for="email" class="col-md-12 col-form-label ">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Password -->
                                <div class="form-group">
                                    <label for="password" class="col-md-12 col-form-label ">{{ __('Password') }}</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- form button -->
                                <div class="form-group mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary sign-btn">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 text-center p-0 sing-social-container">
                        <div class="sign-social-media">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="btn btn-primary">Facebook</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-primary">Google</a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <!-- Sign footer if user not a member -->
    <div class="row">
        <div class="col-12 text-center">
            <div class="sign-footer">
                <p class="sign-footer-info">If you are not a memeber
                    <a href="{{route('register')}}">Register Now</a>
                </p>
            </div>
        </div>
    </div>
</div>

{{-- <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Login') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
@endsection
{{-- End of content --}}
