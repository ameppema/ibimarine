<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

    public function DailyReservationRecords(){
        return $this->hasMany(DailyReservationRecord::class);
    }
}
