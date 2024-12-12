<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use App\Models\Tickets;
use App\Models\Packages;
use App\Models\Tickets_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Psy\Readline\Hoa\Console;

class MatchesController extends Controller
{
    // index
    public function index()
    {
        $user = Auth::guard('account')->user();

        // Fetch data specific to account user
        $matches = Matches::all();
        return view('data')->with('matches', $matches);
    }

    // getNationalitiesBySport
    public function getNationalitiesBySport(Request $request)
    {
        $sport = $request->input('sport');
        $matches = Matches::get()->where('sports', $sport);
        $nationalities = $matches->flatMap(function ($match) {
            return [
                $match->home,
                $match->away
            ];
        })->unique()->whereNotNull()->values();

        return response()->json(isset($nationalities) ? $nationalities : []);
    }

    // getDatesBySportAndNationality
    public function getTypeBySportAndNationality(Request $request)
    {
        $sport = $request->input('sport');
        $nationality = $request->input('nationality');

        $data1 = Matches::get()->where('sports', $sport)->where('home', $nationality);
        $data2 = Matches::get()->where('sports', $sport)->where('away', $nationality);

        $type = $data1->merge($data2)->map(function ($match) {
            return $match->type;
        })->unique()->values();

        return response()->json(isset($type) ? $type : []);
    }

    public function getTicketPrice(Request $request)
    {
        $sport = $request->input('sport');
        $nationality = $request->input('nationality');
        $type = $request->input('type');

        $package = Packages::get()->where('sports', $sport)->where('nationality', $nationality)->where('type', $type)->first();
        $data = Tickets_Detail::get()->where('package_id', $package->id)->values();
        
        return response()->json(isset($data) ? $data : []);
    }

    public function filterMatches(Request $request)
    {
        $sport = $request->input('sport');
        $type = $request->input('type');

        $matches = Matches::where('status', 1)
            ->when($sport, fn($query) => $query->where('sports', $sport))
            ->when($type, fn($query) => $query->where('type', $type))
            ->get()
            ->groupBy('sports')
            ->map(fn($sportGroup) => $sportGroup->groupBy('stages'));

        return view('partials.matches', compact('matches'))->render();
    }
}
