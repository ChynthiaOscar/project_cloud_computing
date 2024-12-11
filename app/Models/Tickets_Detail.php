<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tickets_Detail extends Model
{
    use HasFactory;
    protected $fillable = ['package_id', 'ticket_id', 'quota'];

    public function tickets(): BelongsTo {
        return $this->belongsTo(Tickets::class);
    }

    public function packages(): BelongsTo {
        return $this->belongsTo(Packages::class);
    }
}
