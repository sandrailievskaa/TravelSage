<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TravelSageUser extends Model
{
    protected $table = 'travel_sage.users';

    public $timestamps = false;

    protected $primaryKey = 'id_user';


    public function reservation(): HasMany
    {
        return $this->hasMany(Reservation::class, 'id_user');
    }

    public function preference(): HasMany
    {
        return $this->hasMany(Preference::class, 'id_user');
    }

    public function recommendedDestinations(): BelongsToMany
    {
        return $this->belongsToMany(Destination::class, 'destination_user', 'id_user', 'id_destination')
            ->withPivot(['rating', 'comment', 'date']);
    }
}
