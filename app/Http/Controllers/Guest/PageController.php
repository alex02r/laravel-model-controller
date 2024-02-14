<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        //recuperiamo tutti i movie
        $movies = Movie::all();

        return view('welcome', compact('movies'));
    }
    public function show(){
        
        return view('movie');
    }
}
