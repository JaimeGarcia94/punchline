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

            <source src="{{ route('beat.show', ['filename' => 'dks-by-erikkles.mp3']) }}" type="audio/mpeg" />

        </audio>
    </div>

    <div>
        <select name="" id="select">
            @foreach($beats as $beat)
            <option value="">{{$beat}}</option>
            @endforeach
        </select>
    </div>

    <button onclick="playAudio()" id="a" type="button">Play Audio</button>
    <button onclick="pauseAudio()" type="button">Pause Audio</button>

    <button onclick="myFunction()">Try it</button>


@endsection

<script>


    function myFunction() {
        alert("Hello! I am an alert box!");
    }

    // var x = document.getElementById("myAudio");

    function playAudio() {
        document.getElementById("myAudio").play();
    }

    function pauseAudio() {
        document.getElementById("myAudio").pause();
    }


</script>
