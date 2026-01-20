<?php

namespace App\Http\Controllers;

use App\Repositories\MovieRepositoryInterface;

class MemberController extends Controller
{
    private $movieRepository;

    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function index()
    {
        $movies = $this->movieRepository->getPopularMovies();
        
        return view('member_view', compact('movies'));
    }
}