@extends('layouts.app')

@section('content')
    <h1 id="word" class="text-center"></h1>
    @include('includes.player')
@endsection

<script>
    var listwords = @json($words);

    setInterval(function () {
        document.getElementById("word").innerHTML = getRandomWord();
    }, 10000);

    function getRandomWord(){
        const randomWords = Math.floor(Math.random()*(listwords.length ));
        return listwords[randomWords];
    }

    {{--function createRouteBeat() {--}}
    {{--    var selectBeat = document.getElementById("select").value;--}}
    {{--    var route = "{{route('beat.show', ['filename' => 'selectBeat'])}}".replace("selectBeat", selectBeat);--}}
    {{--    var reproductor = document.getElementById("reproductor");--}}
    {{--    reproductor.setAttribute("src", route);--}}
    {{--    document.getElementById("myAudio").appendChild(reproductor);--}}
    {{--}--}}

    {{--function deleteRouteBeat() {--}}
    {{--    var buttonChangeAudio = document.getElementById("buttonAudio");--}}
    {{--    var stopAudio = document.getElementById("myAudio");--}}
    {{--    stopAudio.load();--}}
    {{--    buttonChangeAudio.innerHTML = "Play";--}}
    {{--    document.getElementsByTagName("source")[0].removeAttribute("src");--}}
    {{--}--}}

    {{--function playAudio() {--}}
    {{--    var audio = document.getElementById("myAudio");--}}
    {{--    var buttonChangeAudio = document.getElementById("buttonAudio");--}}
    {{--    createRouteBeat();--}}
    {{--    if(audio.paused){--}}
    {{--        audio.play();--}}
    {{--        buttonChangeAudio.innerHTML = "Pause";--}}
    {{--    }else{--}}
    {{--        audio.pause();--}}
    {{--        buttonChangeAudio.innerHTML = "Play";--}}
    {{--    }--}}
    {{--}--}}
</script>
