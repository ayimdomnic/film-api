<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmsController extends Controller
{
    protected $film;

    public function __construct(Film $film)
    {
        $this->film = $film;
    }

    public function index()
    {
    }

    public function show($slug)
    {
        $data = $this->film->newQuery()->where('slug', $slug)->first();

        return view('films.show', compact('data'));
    }

    public function create(Request $request)
    {

    }
}
