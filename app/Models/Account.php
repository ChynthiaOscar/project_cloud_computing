<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ['name', 'email', 'password',
        'first_name', 'surname', 'date_of_birth',
        'country_of_residence', 'postcode'];    

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function ticketWinners(): HasMany {
        return $this->hasMany(TicketWinner::class);
    }
}
