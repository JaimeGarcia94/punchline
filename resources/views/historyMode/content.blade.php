@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box-game">
                    <h1 class="title">History Mode</h1>
                    <div class="content-box" id="content-box">
                        <h1 id="history" class="text-center"></h1>
                    </div>
                    <div class="col-md-12">
                        @include('includes.player')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@stack('script')
<script>
    var listHistories = @json($histories);

    function showMessageInit() {
        var contentBox = document.getElementById("content-box");
        if (contentBox.style.visibility === "hidden") {
            contentBox.style.display = "block";
        } else {
            document.getElementsByClassName("content-box")[0].removeAttribute("id");
        }
    }

    setTimeout (function() {
        var histories = document.getElementById("history");
        histories.innerHTML = getRandomHistories();

        showMessageInit();
    },10000);

    setInterval(function () {
        var histories = document.getElementById("history");
        histories.innerHTML = getRandomHistories();
    },60000);

    function getRandomHistories(){
        const randomHistories = Math.floor(Math.random()*(listHistories.length));
        return listHistories[randomHistories];
    }
</script>
