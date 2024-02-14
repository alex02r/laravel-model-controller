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
            @endforeach
        </div>
    </div>
@endsection