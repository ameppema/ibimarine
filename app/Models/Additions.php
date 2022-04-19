<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Boat;

class Additions extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function boats()
    {
        return $this->belongsToMany(Boat::class);
    }

}
