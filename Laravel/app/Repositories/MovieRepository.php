<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class MovieRepository implements MovieRepositoryInterface
{
    public function getPopularMovies()
    {
        // Mengambil data dari TMDB API
        $response = Http::get('https://api.themoviedb.org/3/movie/popular', [
            'api_key' => config('services.tmdb.key'),
        ]);

        return $response->json()['results'] ?? [];
    }
}