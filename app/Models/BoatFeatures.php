<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoatFeatures extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['length', 'beam', 'engines', 'c_velocity', 'masx_speed', 'fuel_comsuption', 'pax', 'bathroom', 'cabins', 'year', 'port', 'model'];
}
