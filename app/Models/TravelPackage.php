<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TravelPackage extends Model
{
    protected $table = 'travel_sage.paketi';

    protected $primaryKey = 'idpaket';

    public $timestamps = false;
}
