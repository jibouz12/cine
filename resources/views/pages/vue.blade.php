@extends('app')

@section('content')

<div class='container-movies'>
    @foreach($data['Search'] as $movie)
        <div class='movies'>
            <a href="{{ route('film.show', ['id' => $movie['imdbID']]) }}">
            @if($movie['Poster'] === 'N/A')
                <img src="images/no-poster.jpg" alt="affiche non disponible">
            @else
                <img src="{{ $movie['Poster'] }}" alt="affiche du film {{ $movie['Title'] }}">
            @endif
            </a>
            <p>{{ $movie['Title'] }}</p>
            </div>
    @endforeach
</div>

@stop