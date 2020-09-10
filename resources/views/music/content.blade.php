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

{{--            <source src="{{ route('beat.show', ['filename' => 'plata.mp3']) }}" type="audio/mpeg" />--}}

        </audio>
    </div>

    <div>
        <select name="" id="select">
            @foreach($beats as $beat)
            <option value="{{$beat}}">{{$beat}}</option>
            @endforeach
        </select>
    </div>

    <button onclick="playAudio()" type="button">Play Audio</button>
    <button onclick="pauseAudio()" type="button">Pause Audio</button>
    <button onclick="deleteRouteBeat()" type="button">Cambiar Audio</button>


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
        document.getElementById("myAudio").removeChild(reproductor);
        var stopAudio = document.getElementById("myAudio");
        stopAudio.load();
    }

    function playAudio() {
        var on = document.getElementById("myAudio");
        if (on){
            createRouteBeat();
        }else{
         deleteRouteBeat();
        }
        // createRouteBeat();
        on.play();
    }

    function pauseAudio() {
        var off = document.getElementById("myAudio");
        off.pause();
    }


</script>
