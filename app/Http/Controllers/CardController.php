<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class CardController extends Controller
{
    public function __invoke()
    {
        $movie = Movie::first();

    return view('includes.card' , compact('movie'));
}
}
