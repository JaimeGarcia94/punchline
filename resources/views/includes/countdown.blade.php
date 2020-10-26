<div id="countdown">

</div>
<button onclick="clickCountDown()">Entrena</button>

@push('countdown')
<script>

    var seconds = 120;
    function countdown(){
        var remainingSeconds = seconds % 120;
        if (remainingSeconds < 10) {
            remainingSeconds = +remainingSeconds;
        }
        document.getElementById('countdown').innerHTML = remainingSeconds;
        if (seconds === 0) {
            clearInterval(clickCountDown);
            document.getElementById('countdown').innerHTML = "0";
        } else {
            seconds--;
        }
    }

    function clickCountDown(){
        setInterval(function () {
            countdown();
        },1000);
    }

    // var timeleft = 10;
    // var downloadTimer = setInterval(function(){
    //     if(timeleft <= 0){
    //         clearInterval(downloadTimer);
    //         document.getElementById("countdown").innerHTML = "Finished";
    //     } else {
    //         document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
    //     }
    //     timeleft -= 1;
    // }, 1000);
</script>
@endpush
