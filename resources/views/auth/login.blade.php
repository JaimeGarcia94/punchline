@extends('layouts.auth')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h1 class="login-box-msg">Iniciar sesión</h1>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-envelope"></i>
                </span>
            </div>


            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-lock"></i>
                </span>
            </div>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="check-and-button">

            <div class="col-xs-8">
                <div class="icheck">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>

            <div class="col-xs-12">
                <button type="submit" class="btn btn-block btn-flat btn-submit">
                    {{ __('Login') }}
                </button>
            </div>
        </div>
    </form>

    <div class="link-forgot-password text-center">
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('¿Has olvidado la contraseña?') }}
            </a>
        @endif
    </div>

    <div class="link-register text-center">
        @if (Route::has('register'))

                <a class="btn btn-link" href="{{ route('register') }}">{{ __('Crear cuenta') }}</a>

        @endif
    </div>
@endsection
