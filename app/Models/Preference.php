<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Preference extends Model
{
    protected $table = 'travel_sage.preferenci';

    protected $primaryKey = 'idprferenca';

    public function user(): BelongsTo
    {
        return $this->belongsTo(TravelSageUser::class, 'idkorisnik');
    }
}
