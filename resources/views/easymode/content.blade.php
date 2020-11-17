@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box-game">

                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                            <span class="title-game">Easy Mode</span>
                            <button onclick="returnBack()" id="buttonBack">
                                <i class="fa fa-sign-out fa-2x"></i>
                            </button>
                        </div>
                    </nav>

                    <div class="content-box content-box-fixed" id="content-box">
                        <div class="content-box-body">


                            <div class="font-word">
                                <h1 id="word" class="text-center"></h1>
                            </div>
                            <div id="paralelograma" class="shape">


                            </div>
                            <span class="span-paralelograma">Easy Mode | Pal. 10S</span>

                            </div>
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

        function returnBack()
        {
            window.location = "http://localhost:8080/home";
        }
    </script>
