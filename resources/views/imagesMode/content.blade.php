@extends('layouts.app')

@section('content')
<h1>Imagenes</h1>
<img id="images" alt="">
@endsection

<script>
    var listImages = @json($images);

    setInterval(function () {
        // document.getElementById("images").innerHTML = getRandomImage();
        var images = document.getElementById("images");

        images.src = listImages;
    }, 5000);

    function getRandomImage(){
        const randomImages = Math.floor(Math.random() * (listImages.length));
        return listImages[randomImages];
    }
</script>
