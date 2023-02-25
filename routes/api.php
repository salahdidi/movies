<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieFavoritController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/login",[LoginController::class,"login"]);
Route::get("/Register",[LoginController::class,"Register"]);

Route::get("/getListMovies",[MovieController::class,"getListMovies"]);
Route::get("/getListMoviesDetails",[MovieController::class,"getListMoviesDetails"]);
Route::get("/getMoviesTrailer",[MovieController::class,"getMoviesTrailer"]);
Route::get("/getListTopMovies",[MovieController::class,"getListTopMovies"]);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get("/addMovieToFavoritesList",[MovieFavoritController::class,"addMovieToFavoritesList"]);
    Route::get("/removeMovieFromFavoritesList",[MovieFavoritController::class,"removeMovieFromFavoritesList"]);
    Route::get("/getMoviesFavorites",[MovieFavoritController::class,"getMoviesFavorites"]);
});

    






