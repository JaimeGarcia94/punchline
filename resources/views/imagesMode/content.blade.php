@extends('layouts.app')

@section('content')
<img id="images" class="text-center" style="width: 400px;height: 400px;">

@include('includes.player')
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
