@extends('layouts.app')

@section('title', 'Trips')

@section('content')

    <div class="trips">
        <div class="title">
            @if(count($trips) > 0)
            <ul>
                @foreach($trips as $trip)
                    <li>{{ $trip }}</li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>

@endsection