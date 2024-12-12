<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages_Detail extends Model
{
    use HasFactory;
    protected $table = 'packages_details';
    protected $fillable = ['match_id', 'package_id'];

    public function matches() {
        return $this->belongsTo(Matches::class, 'match_id', 'id');
    }

    public function packages() {
        return $this->belongsTo(Packages::class, 'package_id');
    }
}
