<div id="main">
    <div id="countdown">
        <span id="content-time">120</span>
    </div>
</div>

<button class="btn start-time" onclick="clickCountDown()" id="text-button">Empieza el tiempo</button>

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

    function returnBack()
    {
        window.location = "http://localhost:8080/home";
    }
</script>
@endpush
