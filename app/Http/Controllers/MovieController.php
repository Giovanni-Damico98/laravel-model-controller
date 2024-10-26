<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
// creo il controller MovieController attraverso "php artisan make:controller MovieController"
class MovieController extends Controller
{
    // Creco un metodo index (quello che richiamo dalla rotta)
    public function index()
    {
        $movies = Movies::all(); // adesso ho bisogno di popolare $movies attraverso il model ed il metodo all()
        // Dico al metodo di "tornare" la vista movies.index e con il compact passo anche $movies che contiene tutti i dati
        // recuperati dalla tabella nel db
        return view("movies.index", compact("movies"));
    }
}