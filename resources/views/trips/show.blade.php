@extends('layouts.app')

@section('content')
    <h1>{{ $trips->name }}</h1>
    <small>{{ $trips->region }}</small>
    <span>{{ $trips->description }}</span>
    <span>{{ $trips->price }}</span>
    <span>{{ $trips->arrival }}</span>
    <span>{{ $trips->return }}</span>
    <img src="{{ $trips->poster }}" alt="">
@endsection