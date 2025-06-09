<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Reservation extends Model
{
    protected $table = 'travel_sage.rezervacii';

    protected $primaryKey = 'idrezervacija';

    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(TravelSageUser::class, 'idkorisnik');
    }

    public function weather(): BelongsTo
    {
        return $this->belongsTo(WeatherCondition::class, 'idmeteo');
    }

    public function activities(): BelongsToMany
    {
        return $this->belongsToMany(TravelActivity::class, 'aktivnosti_has_rezervacii', 'idrezervacija', 'idaktivnost');
    }

    public function review(): HasOne
    {
        return $this->hasOne(Review::class, 'idrezervacija');
    }
}
