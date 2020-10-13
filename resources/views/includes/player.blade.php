<div>
    <audio id="myAudio">
        <source src="" id="reproductor" type="audio/mpeg">
    </audio>
</div>

<div class="content-player">
    <select id="select">
        @foreach($beats as $beat)
            <option value="{{$beat}}" onclick="deleteRouteBeat()">{{$beat}}</option>
        @endforeach
    </select>
</div>
<div>
    <button onclick="playAudio()" id="buttonAudio" type="button">Play</button>
</div>


@push('script')
<script>
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
@endpush
