@extends('layout.app')

@section('title', 'Trips')

@section('content')

    <div class="trips">
        <div class="title">
            {{ $trips->name }}
            {{ $trips->description }}
        </div>
    </div>

@endsection