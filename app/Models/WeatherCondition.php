<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WeatherCondition extends Model
{
    protected $table = 'travel_sage.meteroloshkasostojba';

    protected $primaryKey = 'idmeteo';

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class, 'idvreme');
    }

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class, 'iddest');
    }
}
