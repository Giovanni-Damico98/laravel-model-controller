<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ShowController;
use App\Models\Movies;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("movies", [MovieController::class, "index"])->name("movies.index");
Route::get("/movie/{id}", [ShowController::class, "index"])->name("movies.show");