function createRouteBeat() {
    var selectBeat = document.getElementById("select").value;
    var route = "{{ route('beat.show', ['filename' => 'selectBeat']) }}".replace("selectBeat", selectBeat);
    // var route = "{{route('beat.show', ['filename' => 'selectBeat'])}}".replace("selectBeat", selectBeat);
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
