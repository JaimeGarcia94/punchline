@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box-game">
                    <h1 class="title">Selecciona el modo de juego</h1>
                    <div class="row ">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div class="container-card-panel">
                                <a href="{{ route('easyMode') }}">
                                    <div class="text-hover">
                                        easy mode
                                    </div>
                                    <img class="card-img img-hidden" src="{{ url('/images/not-user.jpg') }}" alt="Card image">
{{--                                    <div class="card-img-overlay">--}}
{{--                                        <div class="description-card-game">--}}
{{--                                            <h5 class="card-title" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="Palabras cada 10 segundos.">Easy mode</h5>--}}
{{--                                            <a href="" class="card-title" data-toggle="popover" data-trigger="hover" data-content="Some content">Card title</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
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


                    <div class="row">
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


