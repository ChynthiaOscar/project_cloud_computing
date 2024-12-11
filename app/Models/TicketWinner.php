<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketWinner extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',  // Replace with the correct field name
        'match_id',    // Add other fields if needed
    ];
}
