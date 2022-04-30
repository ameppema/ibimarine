<?php

namespace App\Models\Translations;

use App\Traits\Translation;
use App\Repositories\Translator;

trait NewsTranslator {

    use Translation;

public function getDescriptionAttribute($value){
        return $this->translate('description', $value);
    }

public function getDescriptionEnAttribute($value){
    return $this->getTranslate_('description', $value);
}

public function updateDescriptionTranslate($value = ''){
    Translator::updateTranslate($this->table, 'description',$this->id, $value, 'en');
}

}