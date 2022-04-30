<?php

namespace App\Models;

use App\Models\Translations\ToyTranslator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    use HasFactory, ToyTranslator;

    public $appends = ['title_en','description_en'];

    public $fillable = ['title', 'description'];
}
