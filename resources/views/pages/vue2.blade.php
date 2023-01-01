@extends('app')

@section('content')

<div class='top'>
    <h2 class='titre'>{{ $data['Title'] }}</h2>
</div>
<div class='container-movie'>
    <div class='left'>
        <div class='poster'>
            @if($data['Poster'] === 'N/A')
                <img src="../images/no-poster.jpg" alt="affiche non disponible">
            @else
                <img src="{{ $data['Poster'] }}" alt="affiche du film {{ $data['Title'] }}">
            @endif
        </div>
    </div>
    <div class='right'>
        <p><strong>Genre : </strong>{{ $data['Genre'] }}</p>
        <p><strong>Année : </strong>{{ $data['Year'] }}</p>
        <p><strong>Durée : </strong>{{ $data['Runtime'] }}</p>
        <p><strong>Synopsis : </strong>{{ $data['Plot'] }}</p>
        <p><strong>Réalisateur : </strong>{{ $data['Director'] }}</p>
        <p><strong>Acteurs : </strong>{{ $data['Actors'] }}</p>
        <p><strong>Langues : </strong>{{ $data['Language'] }}</p>
        <p><strong>Récompenses : </strong>{{ $data['Awards'] }}</p>
        <p><strong>Notes :</strong></br>
            @foreach($data['Ratings'] as $rating)
                {{ $rating['Source'] }} : {{ $rating['Value'] }}</br>
            @endforeach
        </p>
    </div>
</div>

@stop