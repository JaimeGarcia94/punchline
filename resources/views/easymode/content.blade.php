@extends('layouts.app')

@section('content')
    <h1 id="word" class="text-center"></h1>
    @include('includes.player')
@endsection
@stack('script')
<script>
    var listWords = @json($words);

    setInterval(function () {
        var words = document.getElementById("word");
        words.innerHTML = getRandomWord();
    }, 10000);

    function getRandomWord(){
        const randomWords = Math.floor(Math.random()*(listWords.length ));
        return listWords[randomWords];
    }
</script>
