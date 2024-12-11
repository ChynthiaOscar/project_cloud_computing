<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Packages extends Model
{
    use HasFactory;
    protected $fillable = ['nationality', 'status'];

    public function package_details(): HasMany {
        return $this->hasMany(Packages_Detail::class);
    }

    public function draws(): HasMany {
        return $this->hasMany(Draws::class);
    }

    public function tickets_details(): HasMany {
        return $this->hasMany(Tickets_Detail::class);
    }
}