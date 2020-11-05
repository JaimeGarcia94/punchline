@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box-game">
                    <h1 class="title">Termination Mode</h1>
                    <div class="content-box" id="content-box">
                        <h1 id="termination" class="text-center"></h1>
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
    var listTerminations = @json($terminations);

    function showMessageInit() {
        var contentBox = document.getElementById("content-box");
        if (contentBox.style.visibility === "hidden") {
            contentBox.style.display = "block";
        } else {
            document.getElementsByClassName("content-box")[0].removeAttribute("id");
        }
    }

    setTimeout (function() {
        var terminations = document.getElementById("termination");
        terminations.innerHTML = getRandomTermination();

        showMessageInit();
    },10000);

    setInterval(function () {
        var terminations = document.getElementById("termination");
        terminations.innerHTML = getRandomTermination();

    },10000);

    function getRandomTermination(){
        const randomTerminations = Math.floor(Math.random()*(listTerminations.length));
        return listTerminations[randomTerminations];
    }
</script>
