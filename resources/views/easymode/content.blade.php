@extends('layouts.app')

@section('content')
<h1>WORDS</h1>
    <p class="word"></p>
@endsection

<script>
    var listwords = @json($words);
    // console.log(listwords.word);

    setInterval(function () {
        // console.log(getRandomWord());
    }, 5000);

    function getRandomWord(){
        const randomNum = Math.floor(Math.random()*(listwords.length ));
        return listwords[randomNum];
    }

</script>
