@extends('layouts.app')

@section('content')
    <section class="articles">
        <div class="cool_destinations">
            <small>Easy Bookings</small>
            <br>
            <span>Stressed depressed lemon zest!</span>
            <hr>
            @if(count($services) > 0)
            <ul class="list-group">
                @foreach($services as $service)
                    <li class="list-group-item">{{ $service }}</li>
                @endforeach
            </ul>
            @endif
        </div>
    </section>
@endsection
