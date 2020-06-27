@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card data-user">
                    <div class="user-image">
                        @include('includes.avatar')
                    </div>


                    <div class="user-info">
                        @include('includes.nick')
                        @include('includes.age')
                        @include('includes.nationality')
                        <p>{{'Se unió '. \FormatTime::LongTimeFilter(Auth::user()->created_at) }}</p>

                    </div>

                </div>

                <div class="form">
                    <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
                        @csrf

                        <h1 class="title">Editar Perfil</h1>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus placeholder="Nombre">

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
                            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ Auth::user()->surname }}" required autocomplete="surname" autofocus placeholder="Apellidos">

                            @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-phone"></i>
                                </span>
                            </div>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ Auth::user()->phone }}" required autocomplete="phone" autofocus placeholder="Teléfono">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                            <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ Auth::user()->age }}" required autocomplete="age" autofocus placeholder="Edad">

                            @error('age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-building"></i>
                                </span>
                            </div>
                            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ Auth::user()->city }}" required autocomplete="city" autofocus placeholder="Ciudad">

                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-globe"></i>
                                </span>
                            </div>
                            <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ Auth::user()->country }}" required autocomplete="country" autofocus placeholder="Pais">

                            @error('country')
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
                            <input id="nick" type="text" class="form-control @error('nick') is-invalid @enderror" name="nick" value="{{ Auth::user()->nick }}" required autocomplete="nick" autofocus placeholder="Nick">

                            @error('nick')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-photo"></i>
                                </span>
                            </div>
                            <input id="image_path" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" required autocomplete="image_path" autofocus placeholder="avatar">

                            @error('image_path')
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
            </div>
        </div>
    </div>
@endsection

{{--@extends('layouts.register')--}}

{{--@section('content')--}}

{{--    @if(session('message'))--}}
{{--        <div class="alert alert-success">--}}
{{--            {{ session('message') }}--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">--}}
{{--        @csrf--}}

{{--        <h1 class="register-box-msg">Perfil</h1>--}}
{{--        <div class="input-group mb-3">--}}
{{--            <div class="input-group-prepend">--}}
{{--                <span class="input-group-text">--}}
{{--                    <i class="fa fa-user"></i>--}}
{{--                </span>--}}
{{--            </div>--}}
{{--            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus placeholder="Nombre">--}}

{{--            @error('name')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--            @enderror--}}

{{--        </div>--}}

{{--        <div class="input-group mb-3">--}}
{{--            <div class="input-group-prepend">--}}
{{--                <span class="input-group-text">--}}
{{--                    <i class="fa fa-user"></i>--}}
{{--                </span>--}}
{{--            </div>--}}
{{--            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ Auth::user()->surname }}" required autocomplete="surname" autofocus placeholder="Apellidos">--}}

{{--            @error('surname')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--            @enderror--}}

{{--        </div>--}}

{{--        <div class="input-group mb-3">--}}
{{--            <div class="input-group-prepend">--}}
{{--                <span class="input-group-text">--}}
{{--                    <i class="fa fa-phone"></i>--}}
{{--                </span>--}}
{{--            </div>--}}
{{--            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ Auth::user()->phone }}" required autocomplete="phone" autofocus placeholder="Teléfono">--}}

{{--            @error('phone')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--            @enderror--}}
{{--        </div>--}}

{{--        <div class="input-group mb-3">--}}
{{--            <div class="input-group-prepend">--}}
{{--                <span class="input-group-text">--}}
{{--                    <i class="fa fa-calendar"></i>--}}
{{--                </span>--}}
{{--            </div>--}}
{{--            <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ Auth::user()->age }}" required autocomplete="age" autofocus placeholder="Edad">--}}

{{--            @error('age')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--            @enderror--}}

{{--        </div>--}}

{{--        <div class="input-group mb-3">--}}
{{--            <div class="input-group-prepend">--}}
{{--                <span class="input-group-text">--}}
{{--                    <i class="fa fa-building"></i>--}}
{{--                </span>--}}
{{--            </div>--}}
{{--            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ Auth::user()->city }}" required autocomplete="city" autofocus placeholder="Ciudad">--}}

{{--            @error('city')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--            @enderror--}}
{{--        </div>--}}

{{--        <div class="input-group mb-3">--}}
{{--            <div class="input-group-prepend">--}}
{{--                <span class="input-group-text">--}}
{{--                    <i class="fa fa-globe"></i>--}}
{{--                </span>--}}
{{--            </div>--}}
{{--            <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ Auth::user()->country }}" required autocomplete="country" autofocus placeholder="Pais">--}}

{{--            @error('country')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--            @enderror--}}

{{--        </div>--}}

{{--        <div class="input-group mb-3">--}}
{{--            <div class="input-group-prepend">--}}
{{--                <span class="input-group-text">--}}
{{--                    <i class="fa fa-user"></i>--}}
{{--                </span>--}}
{{--            </div>--}}
{{--            <input id="nick" type="text" class="form-control @error('nick') is-invalid @enderror" name="nick" value="{{ Auth::user()->nick }}" required autocomplete="nick" autofocus placeholder="Nick">--}}

{{--            @error('nick')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--            @enderror--}}

{{--        </div>--}}

{{--        <div class="input-group mb-3">--}}
{{--            <div class="input-group-prepend">--}}
{{--                <span class="input-group-text">--}}
{{--                    <i class="fa fa-photo"></i>--}}
{{--                </span>--}}
{{--            </div>--}}
{{--            <input id="image_path" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" required autocomplete="image_path" autofocus placeholder="avatar">--}}

{{--            @error('image_path')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--            @enderror--}}

{{--        </div>--}}

{{--        <div class="input-group mb-3">--}}
{{--            <div class="input-group-prepend">--}}
{{--                <span class="input-group-text">--}}
{{--                    <i class="fa fa-envelope"></i>--}}
{{--                </span>--}}
{{--            </div>--}}
{{--            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" placeholder="Email">--}}

{{--            @error('email')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--            @enderror--}}

{{--        </div>--}}

{{--        <div class="input-group mb-3">--}}
{{--            <div class="input-group-prepend">--}}
{{--                <span class="input-group-text">--}}
{{--                    <i class="fa fa-lock"></i>--}}
{{--                </span>--}}
{{--            </div>--}}
{{--            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ Auth::user()->password }}" required autocomplete="new-password" placeholder="Contraseña">--}}

{{--            @error('password')--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--            @enderror--}}

{{--        </div>--}}

{{--        <div class="input-group mb-3">--}}
{{--            <div class="input-group-prepend">--}}
{{--                <span class="input-group-text">--}}
{{--                    <i class="fa fa-lock"></i>--}}
{{--                </span>--}}
{{--            </div>--}}
{{--            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ Auth::user()->password }}" required autocomplete="new-password" placeholder="Confirma Contraseña">--}}

{{--        </div>--}}

{{--        <div class="col-xs-12">--}}

{{--            <button type="submit" class="btn btn-block btn-flat btn-primary">--}}
{{--                {{ __('Guardar cambios') }}--}}
{{--            </button>--}}

{{--        </div>--}}
{{--    </form>--}}
{{--@endsection--}}
