<?php

namespace App\Models;

use App\Http\Controllers\MeteorologicalCondition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model
{
    protected $table = 'travel_sage.reservation';

    protected $primaryKey = 'id_reservation';

    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(TravelSageUser::class, 'id_user');
    }

    public function activity(): BelongsToMany
    {
        return $this->belongsToMany(TravelActivity::class, 'activity_reservation', 'id_reservation', 'id_activity');
    }
    public function package(): BelongsToMany
    {
        return $this->belongsToMany(TravelPackage::class, 'package_reservation', 'id_reservation', 'id_package');
    }

    public function review(): HasOne
    {
        return $this->hasOne(Review::class, 'id_reservation');
    }
}
