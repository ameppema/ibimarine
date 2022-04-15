<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BoatFeatures;


class Boat extends Model
{
    use HasFactory;

    public function features(){
        return $this->hasOne(BoatFeatures::class);
    }
}
