<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;


class PostController extends Controller
{
    public function getFilm()
    {
        $film = request('film');

        $response = Http::get("https://www.omdbapi.com/?apikey=270fc849&s=${film}");

        return view('pages/vue', [
            'data' => $response->json()
        ]);
    }

    public function getFilmById($id)
    {
        $response = Http::get("https://www.omdbapi.com/?apikey=270fc849&i=${id}");

        return view('pages/vue2', [
            'data' => $response->json()
        ]);
    }


}