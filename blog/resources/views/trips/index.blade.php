@extends('layouts.app')

@section('title', 'Trips')

@section('content')

    <div class="trips">
        <div class="title">
            {{ $trips }}
        </div>
    </div>

@endsection