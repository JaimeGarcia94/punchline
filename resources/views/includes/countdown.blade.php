{{--<div id="countdown">--}}
{{--    <span id="content-time">120</span>--}}
{{--</div>--}}
<div id="container">

    <div id="main">

        <div id="inner-circle"></div>
        <div id="center-circle"></div>
        <div id="countdown">
            <span id="content-time">120</span>
        </div>
    </div>
</div>

<button onclick="clickCountDown()" id="text-button">Empieza el tiempo</button>

@push('countdown')
<script>
    function clickCountDown(){
        var countdown= 120;
        var downloadTimer = setInterval(function(){
            countdown--;
            document.getElementById("content-time").innerHTML = countdown;
            document.getElementById("text-button").style.visibility = "hidden";
            if(countdown <= 0){
                clearInterval(downloadTimer);
                document.getElementById("content-time").innerHTML = "120";
                document.getElementById("text-button").style.visibility = "visible";
                document.getElementById("text-button").innerHTML = "Empieza el tiempo";
            }
        },1000);
    }
</script>
@endpush
