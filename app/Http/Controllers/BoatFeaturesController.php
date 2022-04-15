<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoatFeaturesController {

    public function store(Request $request){
        $feature = DB::table('boat_features')
                    ->insert([
                        'length' => $request->length,
                    ]);
    }

    public function update(Request $request, $id){
        $feature = DB::table('boat_features')
                    ->where('boat_id', $id)
                    ->update([
                        'length' => $request->length
                    ]);
    }
}