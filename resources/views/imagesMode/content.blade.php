@extends('layouts.app')

@section('content')
<h1>Imagenes</h1>
<img id="images" alt="" style="width: 400px;height: 400px;">

@include('includes.player')
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

    function createRouteBeat() {
        var selectBeat = document.getElementById("select").value;
        var route = "{{route('beat.show', ['filename' => 'selectBeat'])}}".replace("selectBeat", selectBeat);
        var reproductor = document.getElementById("reproductor");
        reproductor.setAttribute("src", route);
        document.getElementById("myAudio").appendChild(reproductor);
    }

    function deleteRouteBeat() {
        var buttonChangeAudio = document.getElementById("buttonAudio");
        var stopAudio = document.getElementById("myAudio");
        stopAudio.load();
        buttonChangeAudio.innerHTML = "Play";
        document.getElementsByTagName("source")[0].removeAttribute("src");
    }

    function playAudio() {
        var audio = document.getElementById("myAudio");
        var buttonChangeAudio = document.getElementById("buttonAudio");
        createRouteBeat();
        if(audio.paused){
            audio.play();
            buttonChangeAudio.innerHTML = "Pause";
        }else{
            audio.pause();
            buttonChangeAudio.innerHTML = "Play";
        }
    }

</script>
