<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelActivity extends Model
{
    protected $table = 'travel_sage.aktivnosti';

    protected $primaryKey = 'idaktivnost';

    public $timestamps = false;
}
