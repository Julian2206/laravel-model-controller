<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // select * from Movie
        /* dd($movies[1]->title); */
        $title = "Un titolo";
        return view('home', compact("title", 'movies'));
    }
}

/* comment out ;extension=pdo_mysql.so in php.ini file */
