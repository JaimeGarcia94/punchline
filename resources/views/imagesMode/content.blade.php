@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box-game">
                    <h1 class="title">Images Mode</h1>
                    <img id="images" class="text-center">
                    @include('includes.player')
                </div>
            </div>
        </div>
    </div>
@endsection
@stack('script')
<script>
    var listImages = @json($images);

    setInterval(function () {
        var images = document.getElementById("images");

        images.src = getRandomImage();
    }, 10000);

    function getRandomImage(){
        const randomImages = Math.floor(Math.random() * (listImages.length));
        return listImages[randomImages];
    }
</script>
