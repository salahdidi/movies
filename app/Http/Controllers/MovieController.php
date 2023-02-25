<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function getListMovies(Request $request)
    {
        $name=Request('name','');
        $data=DB::table('movie')->select('movie_id','title','image_path','rating','name')
                                ->Where('name' ,'like','%'.$name.'%')
                                ->OrWhere('title' ,'like','%'.$name.'%')
                                 ->offset(Request('offset',0))
                                ->limit(Request('limit',10))
                                
                                ->get();
        $resuts['data'] = $data;
        $resuts['success'] = true;
        $resuts['message'] = "ok";

        return $resuts;

    }
    public function getListMoviesDetails(Request $request)
    {
        $data=DB::table('movie')->whereMovieId($request->movie_id)
                                 ->get();
        $resuts['data'] = $data;
        $resuts['success'] = true;
        $resuts['message'] = "ok";

        return $resuts;
    }
    public function getMoviesTrailer(Request $request)
    {
        $data=DB::table('movie')->select('trailer_path')
                                 ->whereMovieId($request->movie_id)
                                 ->get();
        $resuts['data'] = $data;
        $resuts['success'] = true;
        $resuts['message'] = "ok";

        return $resuts;
    }
    public function getListTopMovies()
    {
        $data=DB::table('movie')->offset(0)
                                 ->limit(5)
                                 ->orderByDesc('rating')
                                ->get();
        $resuts['data'] = $data;
        $resuts['success'] = true;
        $resuts['message'] = "ok";

        return $resuts;
    }

   
}
