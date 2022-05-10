<?php

namespace App\Models\Translations;

use App\Traits\Translation;
use App\Repositories\Translator;

trait ToyTranslator {

    use Translation;

public function getDescriptionAttribute($value){
        return $this->translate('description', $value);
    }

public function getDescriptionEnAttribute($value){
    return $this->getTranslate_('description', $value);
}

public function updateDescriptionTranslate($value = ''){
    Translator::updateTranslate('toys', 'description',$this->id, $value, 'en');
}
public function getTitleAttribute($value){
        return $this->translate('title', $value);
    }

public function getTitleEnAttribute($value){
    return $this->getTranslate_('title', $value);
}

public function updateTitleTranslate($value = ''){
    Translator::updateTranslate('toys', 'title',$this->id, $value, 'en');
}

}