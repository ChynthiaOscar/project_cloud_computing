<?php

namespace App\Http\Controllers;

use App\Models\Draws;
use Illuminate\Http\Request;
use App\Services\LambdaService;

class TicketController extends Controller
{
    protected $lambdaService;

    public function __construct(LambdaService $lambdaService)
    {
        $this->lambdaService = $lambdaService;
    }
}
