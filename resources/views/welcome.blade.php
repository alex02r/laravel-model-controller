@extends('layouts.mockup')

@section('content')
    <div class="container py-5">
        <div class="row row-gap-4">
            <div class="col-12">
                <h2>Lista dei film:</h2>
            </div>
            @foreach ($movies as $movie)
                <div class="col-3">
                    <div class="movie shadow">
                        <a href="{{ route('movie', ['id' => $movie->id]) }}" class="my-link">
                            <div class="movie-title">
                                <h5>Titolo: {{ $movie->title}}</h5>
                                <span class="text-secondary">{{ $movie->original_title}}</span>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection