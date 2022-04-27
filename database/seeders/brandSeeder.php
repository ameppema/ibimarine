<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class brandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name'=>'Sessa Marine',
            'image'=>'sessa-marine.jpg',
            'slug'=>'sessa-marine'
        ]);
        Brand::create([
            'name'=>'Sessa Marine 2',
            'image'=>'sessa-marine.jpg',
            'slug'=>'sessa-marine-2'
        ]);
        Brand::create([
            'name'=>'Sessa Marine 3',
            'image'=>'sessa-marine.jpg',
            'slug'=>'sessa-marine-3'
        ]);
    }
}
