<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    // Creco un metodo index (quello che richiamo dalla rotta)
    public function index(string $id)
    {
        $movies = Movies::all()[$id - 1];
        return view('movies.show', compact("movies"));
    }
}