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

    // getNationalitiesBySport
    public function getNationalitiesBySport(Request $request)
    {
        $sport = $request->input('sport');
        $data = Matches::get()->where('sports', $sport)->pluck('nationalities');

        return response()->json(isset($data) ? $data : []);
    }

    // getDatesBySportAndNationality
    public function getDatesBySportAndNationality(Request $request)
    {
        $sport = $request->input('sport');
        $nationality = $request->input('nationality');
        $data = Matches::get()->where('sports', $sport)->where('nationalities', $nationality)->pluck('date');

        return response()->json(isset($data) ? $data : []);
    }

}
