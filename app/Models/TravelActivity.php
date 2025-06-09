<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TravelActivity extends Model
{
    protected $table = 'travel_sage.aktivnosti';

    protected $primaryKey = 'idaktivnost';

    public $timestamps = false;

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class, 'iddest');
    }

    public function packages(): BelongsToMany
    {
        return $this->belongsToMany(TravelPackage::class, 'aktivnosti_has_paketi', 'idaktivnost', 'idpaket');
    }

    public function reservations(): BelongsToMany
    {
        return $this->belongsToMany(Reservation::class, 'aktivnosti_has_rezervacii', 'idaktivnost', 'idrezervacija');
    }
}
