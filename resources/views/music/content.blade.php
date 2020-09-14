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
            <source src="" id="reproductor" type="audio/mpeg">
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

@endsection

<script>
    function createRouteBeat() {
        var selectBeat = document.getElementById("select").value;
        var route = "{{route('beat.show', ['filename' => 'selectBeat'])}}".replace("selectBeat", selectBeat);
        var reproductor = document.getElementById("reproductor");
        reproductor.setAttribute("src", route);
        document.getElementById("myAudio").appendChild(reproductor);
    }

    function deleteRouteBeat(){
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
