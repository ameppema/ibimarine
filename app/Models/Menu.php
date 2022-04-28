<?php

namespace App\Models;

use App\Models\Translations\MenuTranslator;
use App\Repositories\Translator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Translation;

class Menu extends Model
{
    use HasFactory, Translation, MenuTranslator;

    public $appends = ['name_en'];
    public $timestamps = false;

    public function getNameEnAttribute(){
        return $this->getTranslate($this->name);
    }

    public function updateNameTranslate($value = ''){
        Translator::updateTranslate('menus','name',$this->id, $value, 'en');
    }
}
