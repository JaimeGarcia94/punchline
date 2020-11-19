@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="box-game">
                    @if(session('messageDanger'))
                        <div class="alert alert-danger">
                            {{ session('messageDanger') }}
                        </div>
                    @endif
                    @if(session('messageSuccess'))
                        <div class="alert alert-success">
                            {{ session('messageSuccess') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    setTimeout(function () {
        window.location = "http://localhost:8080/home";
    },3000);
</script>
