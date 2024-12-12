<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Matches extends Model
{
    use HasFactory;

    protected $table = "matches";
    protected $fillable = ['sports', 'home', 'away', 'date', 'type', 'status'];

    public function package_details(): HasMany {
        return $this->hasMany(Packages_Detail::class);
    }
}
