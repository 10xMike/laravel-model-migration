@extends('layouts.app')

@section('content')
    <h1>{{ $trip->name }}</h1>
    <small>{{ $trip->region }}</small>
    <span>{{ $trip->description }}</span>
    <span>{{ $trip->price }}</span>
    <span>{{ $trip->arrival }}</span>
    <span>{{ $trip->return }}</span>
    <img src="{{ $trip->poster }}" alt="">
@endsection