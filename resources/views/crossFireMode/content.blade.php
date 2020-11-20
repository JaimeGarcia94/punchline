@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="box-game">

                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <span class="title-game">4X4</span>
                        <button onclick="returnBack()" id="buttonBack">
                            <i class="fa fa-sign-out fa-2x"></i>
                        </button>
                    </div>
                </nav>

                <div class="content-box-fixed">
                    <div class="content-box-body">
                        @include('includes.countdown')
                    </div>
                    <div class="span-info-game" id="span-info-game-hidden">
                        <span class="title-game-span">4X4 | 120S</span>
                    </div>
                </div>
                <div class="col-md-12 content-box-player">
                    @include('includes.player')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@stack('countdown')
@stack('script')

