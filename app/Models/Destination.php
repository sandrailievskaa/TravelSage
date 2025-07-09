<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destination extends Model
{
    protected $table = 'travel_sage.destinacii';

    protected $primaryKey = 'iddest';

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'iddest');
    }

    public function weatherConditions(): HasMany
    {
        return $this->hasMany(WeatherCondition::class, 'iddest');
    }

    public function activities(): HasMany
    {
        return $this->hasMany(TravelActivity::class, 'iddest');
    }

    public function events(): HasMany
    {
        return $this->hasMany(TravelEvent::class, 'iddest');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'destinacii_has_tagovi', 'iddest', 'idtag');
    }

    public function packages(): HasMany
    {
        return $this->hasMany(TravelPackage::class, 'iddest');
    }

    public function recommendedByUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'destinacii_has_korisnici', 'iddest', 'idkorisnik')
            ->withPivot(['ocena', 'komentar', 'datum']);
    }

    public function getRouteKeyName(): string
    {
        return 'imelokacija';
    }
}
