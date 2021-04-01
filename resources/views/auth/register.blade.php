@extends('layouts.app')

{{-- Title --}}
@section('title') {{__('Register')}} @endsection

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
            <div class="contact-info text-center">
                <h2 class="">Create an account</h2>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">Form</div>
                <div class="col-md-6">Contacts</div>
            </div>
        </div>
    </div> --}}
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-6 bg-white">
                    <div class="contact-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Name -->
                            <div class="form-group">
                                <label for="name" class="col-md-10 col-form-label ">{{ __('Name') }}</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email" class="col-md-10 col-form-label ">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-8">
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
                                <label for="password" class="col-md-10 col-form-label ">{{ __('Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Confirm Password-->
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-10 col-form-label ">{{ __('Confirm Password') }}</label>

                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Sign up') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    {{-- <div class="card">
                        <div class="card-header">{{ __('Register') }}</div>

                        <div class="card-body">

                        </div>
                    </div> --}}
                </div>
                <div class="col-md-6 text-center bg-dark">
                    <div class="contact-social-media">
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
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <div class="contact-footer">
                <p class="contact-footer-info">Are you a member?
                    <a href="{{route('login')}}">Login Now</a>
                </p>
            </div>
        </div>
    </div>
</div>

{{-- <div class="row justify-content-center">
    {{-- <div class="col-md-8 row">
        <div class="col-md-6">Form</div>
        <div class="col-md-6">Contact</div>
    </div> --}}
    {{-- <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Register') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
{{-- </div>  --}}
@endsection

{{-- End content --}}
