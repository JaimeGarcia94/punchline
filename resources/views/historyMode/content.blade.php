@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box-game">

                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <span class="title-game">History Mode</span>
                            <button onclick="returnBack()" id="buttonBack">
                                <i class="fa fa-sign-out fa-2x"></i>
                            </button>
                        </div>
                    </nav>

                    <div class="content-box content-box-fixed" id="content-box-hidden">
                        <div class="content-box-body">
                            <h1 id="history" class="text-center history-hidden"></h1>
                        </div>
                        <div class="span-info-game" id="span-info-game-hidden">
                            <span class="title-game-span">History Mode | Hist. 60S</span>
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
    var listHistories = @json($histories);

    function showMessageInit() {
        var contentBox = document.getElementById("content-box-hidden");
        var spanInfoGame = document.getElementById("span-info-game-hidden");
        var backgroundHistory = document.getElementById("history");
        if (contentBox.style.visibility === "hidden" && spanInfoGame.style.visibility === "hidden" && backgroundHistory.style.visibility === "hidden") {
            contentBox.style.display = "block";
            spanInfoGame.style.display = "block";
            backgroundHistory.style.display = "block";
        } else {
            document.getElementsByClassName("content-box")[0].removeAttribute("id");
            document.getElementsByClassName("span-info-game")[0].removeAttribute("id");
            backgroundHistory.classList.remove("history-hidden");
        }
    }

    setTimeout (function() {
        var histories = document.getElementById("history");
        histories.innerHTML = getRandomHistories();

        showMessageInit();
    },10000);

    setInterval(function () {
        var histories = document.getElementById("history");
        histories.innerHTML = getRandomHistories();
    },60000);

    function getRandomHistories(){
        const randomHistories = Math.floor(Math.random()*(listHistories.length));
        return listHistories[randomHistories];
    }

    function returnBack()
    {
        window.location = "http://localhost:8080/home";
    }
</script>
