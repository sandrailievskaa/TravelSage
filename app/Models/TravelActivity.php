<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TravelActivity extends Model
{
    protected $table = 'travel_sage.activity';

    protected $primaryKey = 'id_activity';

    public $timestamps = false;

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class, 'id_destination');
    }

    public function package(): BelongsToMany
    {
        return $this->belongsToMany(TravelPackage::class, 'package_activity', 'id_activity', 'id_package');
    }

    public function reservation(): BelongsToMany
    {
        return $this->belongsToMany(Reservation::class, 'activity_reservation', 'id_activity', 'id_reservation');
    }
}
