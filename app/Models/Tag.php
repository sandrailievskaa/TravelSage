<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    protected $table = 'travel_sage.tagovi';

    protected $primaryKey = 'idtag';

    public $timestamps = false;

    public function destinations(): BelongsToMany
    {
        return $this->belongsToMany(Destination::class, 'destinacii_has_tagovi', 'idtag', 'iddest');
    }
}
