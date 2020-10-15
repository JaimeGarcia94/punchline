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
    <button onclick="playAudio()" id="buttonAudio" type="button"><i class = "fa fa-play-circle-o 5px"></i></button>
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
        buttonChangeAudio.innerHTML = '<i class = "fa fa-play-circle-o"></i>';
        document.getElementsByTagName("source")[0].removeAttribute("src");
    }

    function playAudio() {
        var audio = document.getElementById("myAudio");
        var buttonChangeAudio = document.getElementById("buttonAudio");
        createRouteBeat();
        if(audio.paused){
            audio.play();
            buttonChangeAudio.innerHTML = '<i class = "fa fa-pause-circle-o"></i>';
        }else{
            audio.pause();
            buttonChangeAudio.innerHTML = '<i class = "fa fa-play-circle-o"></i>';
        }
    }
</script>
@endpush
