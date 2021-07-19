@extends('layouts.app')

@section('content')
    <h1>Trips</h1>
    @if(count($trips) > 0)
        @foreach($trips as $trip)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        {{-- <img style="width:100%" src="/storage/cover_images/{{$trip->poster}}"> --}}
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/trips/{{$trip->id}}">{{$trip->name}}</a></h3>
                        {{-- <small>Written on {{$trip->created_at}} by {{$trip->user->name}}</small> --}}
                        <img src="{{ $trip->poster }}" alt="">
                    </div>
                </div>
            </div>
        @endforeach
        {{-- {{$trips->links()}} --}}
    @else
        <p>No trips found</p>
    @endif
@endsection