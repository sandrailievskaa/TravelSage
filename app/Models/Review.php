<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Review extends Model
{
    protected $table = 'travel_sage.review';

    protected $primaryKey = 'id_review';


    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class, 'id_destination');
    }

    public function reservation(): HasOne
    {
        return $this->hasOne(Reservation::class, 'reservation_id');
    }
}
