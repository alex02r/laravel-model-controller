@extends('layouts.mockup')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>testo prova</h1>
            </div>
            <div class="col-8">
                @foreach ($movies as $movie)
                    <ul>
                        <li>Titolo: {{ $movie->title}}</li>
                        <li>Titolo originale:{{ $movie->original_title}}</li>
                        <li>Nazionalità:{{ $movie->nationality}}</li>
                        <li>Data di uscita:{{ $movie->date}}</li>
                        <li>Valutazione:{{ $movie->vote}}</li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
@endsection