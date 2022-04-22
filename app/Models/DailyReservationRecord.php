<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservations;

class DailyReservationRecord extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function reservation(){
        return $this->belongsTo(Reservations::class);
    }
}
