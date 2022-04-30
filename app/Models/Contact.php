<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Translations\ContactTranslator;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory, ContactTranslator;

    protected $table = 'contact';

    public $appends = ['description_en'];

}
