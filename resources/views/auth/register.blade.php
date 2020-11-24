@extends('layouts.register')

@section('content')
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <h1 class="register-box-msg">Registrate</h1>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>
                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus placeholder="Apellidos">

                @error('surname')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>
                <input id="nick" type="text" class="form-control @error('nick') is-invalid @enderror" name="nick" value="{{ old('nick') }}" required autocomplete="nick" autofocus placeholder="Nick">

                @error('nick')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-envelope"></i>
                </span>
            </div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

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
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                @error('password')
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
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirma Contraseña">

        </div>

        <div class="col-xs-12">

                <button type="submit" class="btn btn-block btn-flat btn-submit">
                    {{ __('Registrate') }}
                </button>

        </div>
    </form>
@endsection
