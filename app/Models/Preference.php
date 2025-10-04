<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Preference extends Model
{
    protected $table = 'travel_sage.preference';

    protected $primaryKey = 'id_preference';

    public function user(): BelongsTo
    {
        return $this->belongsTo(TravelSageUser::class, 'id_user');
    }
}
