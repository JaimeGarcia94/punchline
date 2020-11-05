@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box-game">
                    <h1 class="title">Easy Mode</h1>
                    <div class="content-box" id="content-box">
                        <h1 id="word" class="text-center"></h1>
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
    var listWords = @json($words);

    function showMessageInit() {
        var contentBox = document.getElementById("content-box");
        if (contentBox.style.visibility === "hidden") {
            contentBox.style.display = "block";
        } else {
            document.getElementsByClassName("content-box")[0].removeAttribute("id");
        }
    }

    setTimeout (function() {
        var words = document.getElementById("word");
        words.innerHTML = getRandomWord();

        showMessageInit();
    },10000);

    setInterval(function () {
        var words = document.getElementById("word");
        words.innerHTML = getRandomWord();

    },10000);

    function getRandomWord(){
        const randomWords = Math.floor(Math.random()*(listWords.length));
        return listWords[randomWords];
    }
</script>
