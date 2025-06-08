<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korisnik extends Model
{
    use HasFactory;

    protected $table = 'travel_sage.korisnici';
    public $timestamps = false;

    protected $primaryKey = 'idkorisnik';

}
