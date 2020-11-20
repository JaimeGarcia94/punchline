@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="box-game">

                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <span class="title-game">Images Mode</span>
                        <button onclick="returnBack()" id="buttonBack">
                            <i class="fa fa-sign-out fa-2x"></i>
                        </button>
                    </div>
                </nav>

                <div class="content-box content-box-fixed" id="content-box-hidden">
                    <div class="content-box-body">
                        <img id="images" class="text-center image-hidden">
                    </div>
                    <div class="span-info-game" id="span-info-game-hidden">
                        <span class="title-game-span">Images Mode | Ima. 10S</span>
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
    var listImages = @json($images);

    function showMessageInit() {
        var contentBox = document.getElementById("content-box-hidden");
        var spanInfoGame = document.getElementById("span-info-game-hidden");
        var backgroundImages = document.getElementById("images");
        if (contentBox.style.visibility === "hidden" && spanInfoGame.style.visibility === "hidden" && backgroundImages.style.visibility === "hidden") {
            contentBox.style.display = "block";
            spanInfoGame.style.display = "block";
            backgroundImages.style.display = "block";
        } else {
            document.getElementsByClassName("content-box")[0].removeAttribute("id");
            document.getElementsByClassName("span-info-game")[0].removeAttribute("id");
            backgroundImages.classList.remove("image-hidden");
        }
    }

    setTimeout (function() {
        var images = document.getElementById("images");
        images.src = getRandomImage();


        showMessageInit();
    },10000);

    setInterval(function () {
        var images = document.getElementById("images");

        images.src = getRandomImage();
    }, 10000);

    function getRandomImage(){
        const randomImages = Math.floor(Math.random() * (listImages.length));
        return listImages[randomImages];
    }

    function returnBack()
    {
        window.location = "http://localhost:8080/home";
    }
</script>
