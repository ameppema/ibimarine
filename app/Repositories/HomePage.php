<?php

namespace App\Repositories;

use App\Models\Contact;
use App\Models\HomeCard;
use App\Models\Image;

class HomePage {

    public function getContactNumbers(){
        return Contact::find(1)->first(['phone_es','phone_en']);
    }

    public function getCards(){
        return HomeCard::all(['id','title','description','image', 'route']);
    }

    public function getHeroImage(){
        return Image::where('belongs_to', 'home')->first() ?? new Image;
    }

}