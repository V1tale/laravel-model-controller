@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Best movies ever</h1>
        <div class="row g-3">
            @foreach ($movies as $movie)
                <div class="col-2">
                    <div class="card">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->original_title }}">
                        <h3>{{ $movie->title }}</h3>
                        <h3>{{ $movie->nationality }}</h3>
                        <h3>year: {{ $movie->date }}</h3>
                        <h3>vote: {{ $movie->vote }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
