@extends('layouts.app')

@section('content')
<h1>Imagenes</h1>
<img id="images" alt="" style="width: 300px;height: 200px;">
@endsection

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
