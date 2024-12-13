<?php

namespace App\Http\Controllers;

use App\Models\Draws;
use App\Models\Tickets_Detail;
use Illuminate\Http\Request;

class DrawController extends Controller
{
    public function getDrawData()
    {
        $quota = Tickets_Detail::sum('quota');
        if ($quota == 0) {
            return response()->json(['message' => 'No tickets available']);
        } else {
            $draws = Draws::select('id', 'account_id', 'package_id')
            ->where('status', 0)
            ->orderBy('package_id')
            ->get()
            ->groupBy('package_id'); // Group by package_id

            return response()->json($draws);    
        }
        
    }

    public function saveWinners(Request $request)
{
    $winners = $request->input('winners');

    foreach ($winners as $winner) {
        foreach ($winner['accounts'] as $account) {
            // Update the draw record with status = 1
            Draws::where('id', $account['draw_id'])->update(['status' => 1]);
        }
    }

    return response()->json(['message' => 'Winners saved and draws updated successfully']);
}
}
