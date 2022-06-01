<?php

namespace App\Repositories;

use App\Models\Image;

class HomePage {

    public function getContactNumber(){
        return /* Contact Numbers  */;
    }

    public function getCards(){
        return /* Cards information  */;
    }

    public function getHeroImage(){
        return Image::where('belongs_to', 'home')->first() ?? new Image;
    }

}