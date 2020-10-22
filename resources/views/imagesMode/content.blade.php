@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box-game">
                    <h1 class="title">Images Mode</h1>
                    <div class="content-box" id="content-box">
                        <img id="images" class="text-center">
                    </div>
                    <div class="col-md-12">
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
        var contentBox = document.getElementById("content-box");
        if (contentBox.style.visibility === "hidden") {
            contentBox.style.display = "block";
        } else {
            document.getElementsByClassName("content-box")[0].removeAttribute("id");
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
</script>
