<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Review extends Model
{
    protected $table = 'travel_sage.recenzii';

    protected $primaryKey = 'idrecenzija';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'idkorisnik');
    }

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class, 'iddest');
    }

    public function reservation(): HasOne
    {
        return $this->hasOne(Reservation::class, 'idrecenzija');
    }
}
