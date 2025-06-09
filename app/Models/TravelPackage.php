<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TravelPackage extends Model
{
    protected $table = 'travel_sage.paketi';

    protected $primaryKey = 'idpaket';

    public $timestamps = false;

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class, 'iddest');
    }

    public function activities(): BelongsToMany
    {
        return $this->belongsToMany(TravelActivity::class, 'aktivnosti_has_paketi', 'idpaket', 'idaktivnost');
    }
}
