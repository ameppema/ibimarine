<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DayliReservationRecord;

class Reservations extends Model
{
    use HasFactory;

    public function DailyReservationRecords(){
        return $this->hasMany(DailyReservationRecord::class);
    }
}
