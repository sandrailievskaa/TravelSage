<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelEvent extends Model
{
    protected $table = 'travel_sage.nastani';

    protected $primaryKey = 'idnastan';

    public $timestamps = false;
}
