@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                @if(session('messageDanger'))
                    <div class="alert alert-danger">
                        {{ session('messageDanger') }}
                    </div>
                @endif
                @if(session('messageSuccess'))
                    <div class="alert alert-success">
                        {{ session('messageSuccess') }}
                    </div>
                @endif
                <div class="form">
                    <h1 class="title">Configuración</h1>

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-mail-tab" data-toggle="tab" href="#nav-mail" role="tab" aria-controls="nav-mail" aria-selected="true">Email</a>
                            <a class="nav-item nav-link" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false">Contraseña</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-mail" role="tabpanel" aria-labelledby="nav-mail-tab">
                            <form method="POST" action="{{ route('config.updateEmail') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    </div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" placeholder="Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror

                                </div>

                                <div class="col-xs-12 mb-3">

                                    <button type="submit" class="btn btn-primary btn-save">
                                        {{ __('Guardar cambios') }}
                                    </button>

                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">

                            <form method="POST" action="{{ route('config.updatePassword') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    </div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Nueva contraseña">

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
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirma la nueva contraseña">

                                </div>

                                <div class="col-xs-12 mb-3">

                                    <button type="submit" class="btn btn-primary btn-save">
                                        {{ __('Guardar cambios') }}
                                    </button>

                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

