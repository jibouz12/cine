@extends('app')

@section('content')

<div class='principal'>
    <div class='container-form'>
        <form class='form' action='/vue' method='post'>
            {{ csrf_field() }}

            <input type="search" name='film' placeholder="Entrez le titre d'un film">
            <input type="submit" value='GO'>
        </form>
    </div>
</div>

@stop