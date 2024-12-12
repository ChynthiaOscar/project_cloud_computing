<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tickets extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'price'];

    public function ticket_details(): HasMany {
        return $this->hasMany(Tickets_Detail::class);
    }

    public function draws(): HasMany {
        return $this->hasMany(Draws::class, 'ticket_id', 'id');
    }
}
