<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $drama_movies = Movie::where("genre_id",'=',1)->get();
        $kids_movies = Movie::where("genre_id",'=',2)->get();
        $tv_show_movies = Movie::where("genre_id",'=',3)->get();
        return view("home",["drama_movies" => $drama_movies,"kids_movies" => $kids_movies,"tv_show_movies" => $tv_show_movies]);
    }

    public function category(Request $request){
        $path = $request->getRequestUri();
        
        if($path == "/drama"){
            $movies = Movie::where("genre_id",'=',1)->get();
            return view("drama_movie_page",["drama_movies" => $movies]);
        }
        else if($path == "/kids"){
            $movies = Movie::where("genre_id",'=',2)->get();
            return view("kids_movie_page",["kids_movies" => $movies]);
        }
        else if($path == "/tv_show"){
            $movies = Movie::where("genre_id",'=',3)->get();
            return view("tv_show_movie_page",["tv_show_movies" => $movies]);
        }
    }

    public function detail(Request $request){
        $movie_id = $request -> movie_id;
        
        $movie = Movie::where("id","=",$movie_id)->first();
        $episodes = Episode::where("movie_id","=",$movie_id)->paginate(3);
    
        return view("movie_detail_page",["movie" => $movie, "episodes" => $episodes]);
    }

    public function show(){
        return view();
    }
}
