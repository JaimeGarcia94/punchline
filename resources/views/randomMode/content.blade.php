@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="box-game">

                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <span class="title-game">Random Mode</span>
                        <button onclick="returnBack()" id="buttonBack">
                            <i class="fa fa-sign-out fa-2x"></i>
                        </button>
                    </div>
                </nav>

                <div class="container content-box content-box-fixed" id="content-box-hidden">
                    <div class="row content-box-body-random">
                        <div class="col-sm-12 col-md-6">
                            <div class="col-12">
                                <h1 id="word-random" class="text-center word-hidden"></h1>
                            </div>

                            <div class="col-12">
                                <h1 id="secondWord" class="text-center word-hidden"></h1>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <img id="images" class="text-center image-hidden">
                        </div>
                    </div>

                    <div class="col-12 span-info-game" id="span-info-game-hidden">
                        <span class="title-game-span">Random Mode | Pal & Imag. 30S</span>
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
    var listImages = @json($images);

    function showMessageInit() {
        var contentBox = document.getElementById("content-box-hidden");
        var spanInfoGame = document.getElementById("span-info-game-hidden");
        var backgroundWord = document.getElementById("word-random");
        var backgroundSecondWord = document.getElementById("secondWord");
        var backgroundImages = document.getElementById("images");
        if (contentBox.style.visibility === "hidden" && spanInfoGame.style.visibility === "hidden" && backgroundWord.style.visibility === "hidden" && backgroundImages.style.visibility === "hidden" && backgroundSecondWord.style.visibility === "hidden") {
            contentBox.style.display = "block";
            spanInfoGame.style.display = "block";
            backgroundWord.style.display = "block";
            backgroundSecondWord.style.display = "block";
            backgroundImages.style.display = "block";
        } else {
            document.getElementsByClassName("content-box")[0].removeAttribute("id");
            document.getElementsByClassName("span-info-game")[0].removeAttribute("id");
            backgroundWord.classList.remove("word-hidden");
            backgroundSecondWord.classList.remove("word-hidden");
            backgroundImages.classList.remove("image-hidden");
        }
    }

    setTimeout (function() {
        var words = document.getElementById("word-random");
        words.innerHTML = getRandomWord();

        var secondWord = document.getElementById("secondWord");
        secondWord.innerHTML = getSecondRandomWord();

        var images = document.getElementById("images");
        images.src = getRandomImage();


        showMessageInit();
    },10000);

    setInterval(function () {
        var words = document.getElementById("word-random");
        words.innerHTML = getRandomWord();

        var secondWord = document.getElementById("secondWord");
        secondWord.innerHTML = getSecondRandomWord();

        var images = document.getElementById("images");
        images.src = getRandomImage();
    }, 30000);

    function getRandomWord(){
        const randomWords = Math.floor(Math.random()*(listWords.length));
        return listWords[randomWords];
    }

    function getSecondRandomWord(){
        const secondRandomWords = Math.floor(Math.random()*(listWords.length));
        return listWords[secondRandomWords];
    }

    function getRandomImage(){
        const randomImages = Math.floor(Math.random()*(listImages.length));
        return listImages[randomImages];
    }

    function returnBack()
    {
        window.location = "http://localhost:8080/home";
    }
</script>
