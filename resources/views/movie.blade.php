@extends('layouts.mockup')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Film:</h1>
            </div>
            <div class="col-8">
                <div class="movie">
                    <div class="movie-title">
                        <h5>Titolo: {{ $movie->title}}</h5>
                        <span class="text-secondary">{{ $movie->original_title}}</span>
                    </div>
                    <ul class="list-unstyled">
                        <li>Nazionalità: {{ $movie->nationality}}</li>
                        <li>Data di uscita: {{ $movie->date}}</li>
                        <li>Valutazione: {{ $movie->vote}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection