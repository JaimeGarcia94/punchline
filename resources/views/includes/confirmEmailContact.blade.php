@extends('layouts.app')

@section('content')
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
@endsection
