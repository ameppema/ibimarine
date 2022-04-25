<?php

namespace Database\Seeders;

use App\Models\Boat;
use App\Models\BoatFeatures;
use Illuminate\Database\Seeder;

class boatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Boat::create([
            'id' => 99,
            'name'=> 'Otro',
            'slug'=> 'otro',
            'description'=> '',
            'low_season_price'=> 1,
            'high_season_price'=>1,
        ]);
        BoatFeatures::create([
            'length'=> '',
            'beam'=> '',
            'engines'=> '',
            'c_velocity'=> '',
            'max_speed'=> '',
            'fuel_consumption'=> '',
            'pax'=> '',
            'bathroom'=> '',
            'cabins'=> '',
            'year'=> '',
            'port'=> '',
            'model'=> '',
            'boat_id'=> 99,
        ]);
    }
}
