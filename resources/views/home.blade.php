@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box-game">
                    <h1 class="title">Selecciona el modo de juego</h1>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div class="container-card-panel">
                                <a href="{{ route('easyMode') }}">
                                    <div class="text-hover">
                                        <h5 class="text-justify">Easy Mode</h5>
                                        <p>Palabras cada 10 segundos</p>
                                    </div>
                                    <img class="card-img img-hidden" src="{{ url('/images/not-user.jpg') }}" alt="Card image">
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div class="container-card-panel">
                                <a href="{{ route('imagesMode') }}">
                                    <div class="text-hover">
                                        <h5 class="text-justify">Images</h5>
                                        <p>Imágenes cada 10 segundos</p>
                                    </div>
                                    <img class="card-img img-hidden" src="{{ url('/images/not-user.jpg') }}" alt="Card image">
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div class="container-card-panel">
                                <a href="{{ route('randomMode') }}">
                                    <div class="text-hover">
                                        <h5 class="text-justify">Random Mode</h5>
                                        <p>Imágenes y palabras cada 30 segundos</p>
                                    </div>
                                    <img class="card-img img-hidden" src="{{ url('/images/not-user.jpg') }}" alt="Card image">
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div class="container-card-panel">
                                <a href="{{ route('extremeMode') }}">
                                    <div class="text-hover">
                                        <h5 class="text-justify">Extreme Mode</h5>
                                        <p>Palabras cada 5 segundos</p>
                                    </div>
                                    <img class="card-img img-hidden" src="{{ url('/images/not-user.jpg') }}" alt="Card image">
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div class="container-card-panel">
                                <a href="{{ route('historyMode') }}">
                                    <div class="text-hover">
                                        <h5 class="text-justify">History Mode</h5>
                                        <p>Crea una historia con tres palabras durante un minuto</p>
                                    </div>
                                    <img class="card-img img-hidden" src="{{ url('/images/not-user.jpg') }}" alt="Card image">
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div class="container-card-panel card bg-dark">
                                <a href="#" class="link-panel-game text-white">
                                    <img class="card-img" src="{{ url('/images/not-user.jpg') }}" alt="Card image">
                                    <div class="card-img-overlay">
                                        <div class="description-card-game">
                                            <h5 class="card-title">Card title</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection


