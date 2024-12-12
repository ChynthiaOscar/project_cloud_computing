<?php

namespace App\Http\Controllers;

use App\Models\Draws;
use App\Models\Packages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketsDetailController extends Controller
{
    //

    public function saveTickets(Request $request) {
        $user = Auth::guard('account')->user()->id;

        $formfield = $request->validate([
            'sport' => 'required|string',
            'nationality' => 'required|string',
            'type' => 'required|string',
        ]);

        $package = Packages::get()->where('sports', $formfield['sport'])->where('nationality', $formfield['nationality'])->where('type', $formfield['type'])->first();
        
        Draws::create([
            'account_id' => $user,
            'package_id' => $package->id,
            'status' => '0'
        ]);

        return redirect()->route('information')->with('success', 'Ticket successfully drawn');
    }
}
