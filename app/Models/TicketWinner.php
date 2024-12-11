<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TicketWinner extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',  // Replace with the correct field name
        'match_id',    // Add other fields if needed
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function match(): BelongsTo
    {
        return $this->belongsTo(Matches::class);
    }
}
