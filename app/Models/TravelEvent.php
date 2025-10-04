<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TravelEvent extends Model
{
    protected $table = 'travel_sage.event';

    protected $primaryKey = 'id_event';

    public $timestamps = false;

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class, 'id_destination');
    }
}
