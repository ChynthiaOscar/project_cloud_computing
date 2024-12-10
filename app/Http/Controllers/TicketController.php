<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LambdaService;
use App\Models\TicketWinner;

class TicketController extends Controller
{
    protected $lambdaService;

    public function __construct(LambdaService $lambdaService)
    {
        $this->lambdaService = $lambdaService;
    }

    public function storeWinner(Request $request)
    {
        $validated = $request->validate([
            'winner_id' => 'required|integer',
            'match_id' => 'required|integer',
        ]);

        // Insert data into the database
        TicketWinner::create([
            'account_id' => $validated['winner_id'],
            'match_id' => $validated['match_id'],
        ]);

        return response()->json(['message' => 'Winner saved successfully'], 201);
    }
}
