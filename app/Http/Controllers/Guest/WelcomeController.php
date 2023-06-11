<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;

class WelcomeController extends Controller
{
    public function index()
    {

        $movies = Movies::all();

        return view('pages.welcome', compact('movies'));
    }
}