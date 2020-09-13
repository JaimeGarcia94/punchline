@extends('layouts.app')

@section('content')
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="form">
        <form method="POST" action="{{ route('beats.insert') }}" enctype="multipart/form-data">
            @csrf

            <h1 class="title">Beats</h1>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-photo"></i>
                                </span>
                </div>
                <input id="music_path" type="file" class="form-control @error('music_path') is-invalid @enderror" name="music_path" required autocomplete="music_path">

                @error('music_path')
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                @enderror
            </div>

            <div class="col-xs-12 mb-3">
                <button type="submit" class="btn btn-primary btn-save">
                    {{ __('Guardar cambios') }}
                </button>
            </div>

        </form>
    </div>

    <div>
        <audio id="myAudio">

        </audio>
    </div>

    <div>
        <select name="" id="select">
            @foreach($beats as $beat)
            <option value="{{$beat}}" onclick="deleteRouteBeat()">{{$beat}}</option>
            @endforeach
        </select>
    </div>

    <button onclick="playAudio()" id="buttonAudio" type="button">Play</button>
{{--    <button onclick="pauseAudio()" type="button">Pause Audio</button>--}}

{{--    <div>--}}
{{--        <button id="button">Play</button>--}}
{{--    </div>--}}

{{--    <audio id="player">--}}
{{--        <source src='http://localhost:8080/beats/mis-vicios.mp3' type='audio/mpeg'/>--}}
{{--    </audio>--}}

@endsection

<script>



    function createRouteBeat() {
        var selectBeat = document.getElementById("select").value;
        var route = "{{route('beat.show', ['filename' => 'selectBeat'])}}".replace("selectBeat", selectBeat);
        var reproductor = document.createElement("source");
        reproductor.setAttribute("src", route);
        reproductor.setAttribute("id", "reproductor");
        reproductor.setAttribute("type", "audio/mpeg");
        document.getElementById("myAudio").appendChild(reproductor);
    }

    function deleteRouteBeat(){
        var buttonAudio = document.getElementById("buttonAudio");
        document.getElementById("myAudio").removeChild(reproductor);
        var stopAudio = document.getElementById("myAudio");
        stopAudio.load();
        buttonAudio.innerHTML = "Play";
    }

    function playAudio() {
        var audio = document.getElementById("myAudio");
        var buttonAudio = document.getElementById("buttonAudio");
        createRouteBeat();
        if(audio.paused){
            audio.play();
            buttonAudio.innerHTML = "Pause";
        }else{
            audio.pause();
            buttonAudio.innerHTML = "Play";
        }

    }

    // function pauseAudio() {
    //     var offAudio = document.getElementById("myAudio");
    //     offAudio.pause();
    // }



    // var button = document.getElementById("button");
    // var audio = document.getElementById("player");
    //
    // button.addEventListener("click", function(){
    //     if(audio.paused){
    //         audio.play();
    //         button.innerHTML = "Pause";
    //     } else {
    //         audio.pause();
    //         button.innerHTML = "Play";
    //     }
    // });

</script>
