<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCard extends Model
{
    use HasFactory, HomeCardTranslator;

    public $timestamps = false;

    public $appends = ['title_en','description_en'];

    public $fillable = ['title', 'description'];
}
