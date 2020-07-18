@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box-game">
                    <h1 class="title">Selecciona el modo de juego</h1>
                    <div class="row ">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div class="container-card-panel card bg-dark">
                                <a href="#" class="link-panel-game text-white" data-toggle="popover" data-trigger="hover" data-content="Some content">
                                    <img class="card-img" src="{{ url('/images/not-user.jpg') }}" alt="Card image">
                                    <div class="card-img-overlay">
                                        <div class="description-card-game">
                                            <h5 class="card-title">Easy mode</h5>
{{--                                            <a href="" class="card-title" data-toggle="popover" data-trigger="hover" data-content="Some content">Card title</a>--}}
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
                                            <p class="card-text">Last updated 3 mins ago</p>
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
                                            <p class="card-text">Last updated 3 mins ago</p>
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
                                            <p class="card-text">Last updated 3 mins ago</p>
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
                                            <p class="card-text">Last updated 3 mins ago</p>
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
                                            <p class="card-text">Last updated 3 mins ago</p>
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

    <div class="container">
        <h3>Popover Example</h3>
        <a href="#" title="Header" data-toggle="popover" data-content="Some content">Click Me</a><br>
        <a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-content="Some content">Hover over me</a>
    </div>
@endsection


