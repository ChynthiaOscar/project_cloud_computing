<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Draw extends Model
{
    use HasFactory;

    public function package(): BelongsTo {
        return $this->belongsTo(Packages::class);
    }

    public function account(): BelongsTo {
        return $this->belongsTo(Account::class);
    }
}
