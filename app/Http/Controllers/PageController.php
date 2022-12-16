<?php

namespace App\Http\Controllers;

use all\Http\Controllers\Controller;
use app\Models\Movie;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
