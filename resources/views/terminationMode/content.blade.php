@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box-game">

                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <span class="title-game">Termination Mode</span>
                            <button onclick="returnBack()" id="buttonBack">
                                <i class="fa fa-sign-out fa-2x"></i>
                            </button>
                        </div>
                    </nav>

                    <div class="content-box content-box-fixed" id="content-box-hidden">
                        <div class="content-box-body">
                            <h1 id="termination" class="text-center termination-hidden"></h1>
                        </div>
                        <div class="span-info-game" id="span-info-game-hidden">
                            <span class="title-game-span">Termination Mode | Term. 5S</span>
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
@stack('script')
<script>
    var listTerminations = @json($terminations);

    function showMessageInit() {
        var contentBox = document.getElementById("content-box-hidden");
        var spanInfoGame = document.getElementById("span-info-game-hidden");
        var backgroundTermination = document.getElementById("termination");
        if (contentBox.style.visibility === "hidden" && spanInfoGame.style.visibility === "hidden" && backgroundTermination.style.visibility === "hidden") {
            contentBox.style.display = "block";
            spanInfoGame.style.display = "block";
            backgroundTermination.style.display = "block";
        } else {
            document.getElementsByClassName("content-box")[0].removeAttribute("id");
            document.getElementsByClassName("span-info-game")[0].removeAttribute("id");
            backgroundTermination.classList.remove("termination-hidden");
        }
    }

    setTimeout (function() {
        var terminations = document.getElementById("termination");
        terminations.innerHTML = getRandomTermination();

        showMessageInit();
    },10000);

    setInterval(function () {
        var terminations = document.getElementById("termination");
        terminations.innerHTML = getRandomTermination();

    },10000);

    function getRandomTermination(){
        const randomTerminations = Math.floor(Math.random()*(listTerminations.length));
        return listTerminations[randomTerminations];
    }

    function returnBack()
    {
        window.location = "http://localhost:8080/home";
    }
</script>
