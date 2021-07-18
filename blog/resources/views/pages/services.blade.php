@extends('layouts.app')

@section('content')
    <section class="articles">
        <div class="cool_destinations">
            <small>Easy Bookings</small>
            <br>
            <span>Stressed depressed lemon zest!</span>

            @if(count($services) > 0)
            <ul>
                @foreach($services as $service)
                    <li>{{ $service }}</li>
                @endforeach
            </ul>
            @endif
        </div>
    </section>
@endsection
