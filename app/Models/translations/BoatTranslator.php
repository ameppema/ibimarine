<?php

namespace App\Models\Translations;

use App\Traits\Translation;

trait BoatTranslator {

    use Translation;

public function getDescriptionAttribute($value){
        return $this->translate('description', $value);
    }

}