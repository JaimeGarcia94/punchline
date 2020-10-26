<div id="countdown">
    <button onclick="secondPassed()">click</button>
</div>

@push('countdown')
<script>
    var seconds = 120;
    function secondPassed(){
        setInterval(function () {
            var remainingSeconds = seconds % 120;
            if (remainingSeconds < 10) {
                remainingSeconds = +remainingSeconds;
            }
            document.getElementById('countdown').innerHTML = remainingSeconds;
            if (seconds === 0) {
                // clearInterval(countdownTimer);
                document.getElementById('countdown').innerHTML = "0";
            } else {
                seconds--;
            }
        },1000);
    }


    // var seconds = 120;
    // function secondPassed() {
    //     var remainingSeconds = seconds % 120;
    //     if (remainingSeconds < 10) {
    //         remainingSeconds = +remainingSeconds;
    //     }
    //     document.getElementById('countdown').innerHTML = remainingSeconds;
    //     if (seconds === 0) {
    //         clearInterval(countdownTimer);
    //         document.getElementById('countdown').innerHTML = "0";
    //     } else {
    //         seconds--;
    //     }
    // }
    // var countdownTimer = setInterval(function () {
    //     secondPassed();
    // },1000);

</script>
@endpush
