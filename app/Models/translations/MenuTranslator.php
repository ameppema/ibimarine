<?php

namespace App\Models\Translations;

use App\Traits\Translation;

trait  MenuTranslator{

    use Translation;

public function getNameAttribute($value){
        return $this->translate('name', $value);
    }

}