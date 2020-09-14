@extends('layouts.app')

@section('content')
<h1>WORDS</h1>
    <h1 id="word" class="text-center"></h1>

    @include('includes.player')
@endsection

<script>
    var listwords = @json($words);

    setInterval(function () {
        document.getElementById("word").innerHTML = getRandomWord();
    }, 10000);

    function getRandomWord(){
        const randomWords = Math.floor(Math.random()*(listwords.length ));
        return listwords[randomWords];
    }

</script>
