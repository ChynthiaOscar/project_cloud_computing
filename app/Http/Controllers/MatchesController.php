<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    // index
    public function index()
    {
        $matches = Matches::all();
        return view('data')->with('matches', $matches);
    }
}
