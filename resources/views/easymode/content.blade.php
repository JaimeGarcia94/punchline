@extends('layouts.app')

@section('content')
<h1>WORDS</h1>
    <h1 id="word" class="text-center"></h1>
@endsection

<script>
    var listwords = @json($words);

    setInterval(function () {
        view_word = getRandomWord();
        document.getElementById("word").innerHTML = view_word;
    }, 5000);

    function getRandomWord(){
        const randomWords = Math.floor(Math.random()*(listwords.length ));
        return listwords[randomWords];
    }

</script>
