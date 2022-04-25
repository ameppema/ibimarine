<?php

namespace App\Repositories;

use App\Models\Boat;
use Illuminate\Support\Str;

class Boats {


    public function getSlug($boatName){
        $slug = Str::slug($boatName);
        $exists = Boat::where('name', $boatName)->get('slug');
        if($exists->count() > 0){
            return $slug . '-'. $exists->count();
        }
        return $slug;
    }

    public function getAdditions($request){
        return $request->validate([
            'crew'=>'nullable',
            'captain'=>'nullable',
            'drink'=>'nullable',
            'music'=>'nullable',
            'shower'=>'nullable',
            'air'=>'nullable',
            'sports'=>'nullable',
        ]);
    }
}