@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box-game">
                    <h1 class="title">Random Mode</h1>
                    <div class="content-box" id="content-box">
                        <h1 id="word" class="text-center"></h1>
                        <h1 id="secondWord" class="text-center"></h1>
                        <img id="images" class="text-center">
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
    var listImages = @json($images);
</script>
