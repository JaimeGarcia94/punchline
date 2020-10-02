<div>
    <audio id="myAudio">
        <source src="" id="reproductor" type="audio/mpeg">
    </audio>
</div>

<div>
    <select id="select">
        @foreach($beats as $beat)
            <option value="{{$beat}}" onclick="deleteRouteBeat()">{{$beat}}</option>
        @endforeach
    </select>
</div>

<button onclick="playAudio()" id="buttonAudio" type="button">Play</button>

