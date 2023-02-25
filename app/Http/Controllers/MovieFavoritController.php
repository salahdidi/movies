<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieFavoritRequest;
use App\Models\MovieFavorit;

use Illuminate\Support\Facades\Auth;


class MovieFavoritController extends Controller
{
    public function addMovieToFavoritesList(MovieFavoritRequest $request)
    {
        
        $resuts['data'] = [];
        $resuts['success'] = true;
        $resuts['message'] = "movie added to favorit list";
        $user= Auth::user();
        
        
        $movie_id= $request->movie_id;
        $check=MovieFavorit::firstOrCreate([
                                    "movie_id" => $movie_id,
                                    "user_id"=>$user->id]);
        if(!$check)
        {        
            $resuts['success'] = false;
            $resuts['message'] = "failed to add movie to favorit list ... maybe movie already in the list"; 
        }
       
        return $resuts;
    }
    public function removeMovieFromFavoritesList(movieFavoritRequest $request)
    {
        $resuts['data'] = [];
        $resuts['success'] = true;
        $resuts['message'] = "movie removed from Favorit list";

        $movie_id= $request->movie_id;
        $check=MovieFavorit::whereMovieId($movie_id)
                            ->whereUserId(Auth::user()->id)
                            ->delete();                                  
       
        return $resuts;
    }

    public function getMoviesFavorites()
    {
        $data=MovieFavorit::join('movie','movie.movie_id','=','movie_favorit.movie_id')
                            ->select('movie.movie_id','title','name')
                            ->whereUserId(Auth::user()->id)->get();

        $resuts['data'] = $data;
        $resuts['success'] = true;
        $resuts['message'] = "ok";
        return $resuts;
    }
}
