@extends('layouts.app')

@section('content')
<h1>WORDS</h1>
    @foreach($words as $word)
        <p>{{ $word->word }}</p>
    @endforeach

@json($words)
{{--<script type="text/javascript">--}}

{{--    const word = @json($words);--}}


{{--</script>--}}
@endsection
