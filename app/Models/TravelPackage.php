<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TravelPackage extends Model
{
    protected $table = 'travel_sage.package';

    protected $primaryKey = 'id_package';

    public $timestamps = false;

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class, 'id_destination');
    }

    public function activity(): BelongsToMany
    {
        return $this->belongsToMany(TravelActivity::class, 'activity_package', 'id_package', 'id_activity');
    }

    public function reservation(): BelongsToMany
    {
        return $this->belongsToMany(Reservation::class, 'package_reservation', 'id_package', 'id_reservation');
    }
}
