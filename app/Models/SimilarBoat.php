<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimilarBoat extends Model
{
    use HasFactory;

    public $table = 'boat_similars';

    public function boat(){
        return $this->hasOne(Boat::class, 'id', 'similar_boat_id');
    }
}
