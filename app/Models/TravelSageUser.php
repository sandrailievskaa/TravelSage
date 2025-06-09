<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TravelSageUser extends Model
{
    protected $table = 'travel_sage.korisnici';
    public $timestamps = false;

    protected $primaryKey = 'idkorisnik';

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'idkorisnik');
    }

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class, 'idkorisnik');
    }

    public function preferences(): HasMany
    {
        return $this->hasMany(Preference::class, 'idkorisnik');
    }

    public function recommendedDestinations(): BelongsToMany
    {
        return $this->belongsToMany(Destination::class, 'destinacii_has_korisnici', 'idkorisnik', 'iddest')
            ->withPivot(['ocena', 'komentar', 'datum']);
    }


}
