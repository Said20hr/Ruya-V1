@extends('layouts.auth')

@section('content')
    <section class="pt40 pb40  parallax  overlay bg-img-1">
        <div class="hero-container container">
            <div class="col-sm-12 mr-auto text-center">
                <h3 class="large white-until-load mt20 white"><span class="bold">login</span></h3>
                <hr class="separator">
            </div>
        </div>
    </section>
<div class="container pt100 pb100 overlay">
    <div class="row justify-content-center mr-auto">
        <div class="col-md-8 mr-auto">
            <div class="card border-secondary">
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
                                <div class="col-md-8 offset-md-4">
                                    <a href="{{ route('login.facebook') }}">
                                        <button type="button" class="btn btn-block btn-facebook">
                                            <i class="fa fa-facebook mr-2"></i>Facebook
                                        </button>
                                    </a>
                                </div>
                                <div class="col-md-8 offset-md-4">
                                    <a href="{{ route('login.google') }}">
                                        <button type="button" class="btn btn-block btn-google">
                                            <i class="fa fa-google mr-2"></i>Google
                                        </button>
                                    </a>
                                </div>
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
    </div>
</div>
@endsection
