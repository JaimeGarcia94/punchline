@extends('layouts.register')

@section('content')
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <h5 class="register-box-msg">{{ __('Recupera la contraseña') }}</h5>
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
        <div class="col-xs-12">
            <button type="submit" class="btn btn-block btn-flat btn-primary">
                {{ __('Recupera la contraseña') }}
            </button>
        </div>
    </form>
</div>
@endsection
