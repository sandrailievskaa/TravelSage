<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    protected $table = 'travel_sage.tag';

    protected $primaryKey = 'id_tag';

    public $timestamps = false;

    public function destination(): BelongsToMany
    {
        return $this->belongsToMany(Destination::class, 'destination_tag', 'id_tag', 'id_destination');
    }
}
