<?php

namespace App\Http\Controllers;

use App\Models\Draw;
use App\Models\Draws;
use Illuminate\Http\Request;

class DrawController extends Controller
{
    public function getDrawData()
    {
        $draws = Draw::select('id', 'account_id', 'package_id')
            ->orderBy('package_id')
            ->get()
            ->groupBy('package_id'); // Group by package_id

        return response()->json($draws);
    }

    public function saveWinners(Request $request)
{
    $winners = $request->input('winners');

    foreach ($winners as $winner) {
        foreach ($winner['accounts'] as $account) {
            // Update the draw record with status = 1
            Draw::where('id', $account['draw_id'])->update(['status' => 1]);
        }
    }

    return response()->json(['message' => 'Winners saved and draws updated successfully']);
}
}
