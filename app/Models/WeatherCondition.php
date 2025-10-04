<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WeatherCondition extends Model
{
    protected $table = 'travel_sage.meteorological_condition';

    protected $primaryKey = 'id_meteo';

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class, 'id_destination');
    }
}
