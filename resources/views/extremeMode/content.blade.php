@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box-game">

                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <span class="title-game">Extreme Mode</span>
                            <button onclick="returnBack()" id="buttonBack">
                                <i class="fa fa-sign-out fa-2x"></i>
                            </button>
                        </div>
                    </nav>

                    <div class="content-box content-box-fixed" id="content-box-hidden">
                        <div class="content-box-body">
                            <h1 id="word" class="text-center word-hidden"></h1>
                        </div>
                        <div class="span-info-game" id="span-info-game-hidden">
                            <span class="title-game-span">Extreme Mode | Pal. 5S</span>
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
    var listWords = @json($words);

    function showMessageInit() {
        var contentBox = document.getElementById("content-box-hidden");
        var spanInfoGame = document.getElementById("span-info-game-hidden");
        var backgroundWord = document.getElementById("word");
        if (contentBox.style.visibility === "hidden" && spanInfoGame.style.visibility === "hidden" && backgroundWord.style.visibility === "hidden") {
            contentBox.style.display = "block";
            spanInfoGame.style.display = "block";
            backgroundWord.style.display = "block";
        } else {
            document.getElementsByClassName("content-box")[0].removeAttribute("id");
            document.getElementsByClassName("span-info-game")[0].removeAttribute("id");
            backgroundWord.classList.remove("word-hidden");
        }
    }

    setTimeout (function() {
        var words = document.getElementById("word");
        words.innerHTML = getRandomWord();

        showMessageInit();
    },5000);

    setInterval(function () {
        var words = document.getElementById("word");
        words.innerHTML = getRandomWord();

    },5000);

    function getRandomWord(){
        const randomWords = Math.floor(Math.random()*(listWords.length));
        return listWords[randomWords];
    }
</script>
