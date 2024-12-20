<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Draws extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',  // Replace with the correct field name
        'package_id',    // Add other fields if needed
        'status',
        'ticket_id'
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    public function packages(): BelongsTo
    {
        return $this->belongsTo(Packages::class, 'package_id');
    }

    public function tickets(): BelongsTo
    {
        return $this->belongsTo(Tickets::class, 'ticket_id', 'id');
    }
}
