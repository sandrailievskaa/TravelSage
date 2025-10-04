<?php

namespace App\Models;

use App\Http\Controllers\MeteorologicalCondition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destination extends Model
{
    protected $table = 'travel_sage.destination';

    protected $primaryKey = 'id_destination';

    public function review(): HasMany
    {
        return $this->hasMany(Review::class, 'id_destination');
    }

    public function meteorological_condition(): HasMany
    {
        return $this->hasMany(MeteorologicalCondition::class, 'id_destination');
    }

    public function activity(): HasMany
    {
        return $this->hasMany(TravelActivity::class, 'id_destination');
    }

    public function event(): HasMany
    {
        return $this->hasMany(TravelEvent::class, 'id_destination');
    }

    public function tag(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'destination_tag', 'id_destination', 'id_tag');
    }

    public function package(): HasMany
    {
        return $this->hasMany(TravelPackage::class, 'id_destination');
    }

    public function destination_user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'destination_user', 'id_destination', 'id_user')
            ->withPivot(['rating', 'comment', 'recommendation_date']);
    }

    public function getRouteKeyName(): string
    {
        return 'location_name';
    }

}
