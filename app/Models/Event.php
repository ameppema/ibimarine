<?php

namespace App\Models;

use App\Models\Translations\EventTranslator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory, EventTranslator;

    public $appends = ['description_en'];
}
