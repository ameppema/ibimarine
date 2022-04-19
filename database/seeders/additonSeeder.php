<?php

namespace Database\Seeders;

use App\Models\Additions;
use Illuminate\Database\Seeder;

class additonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Additions::create(['name'=>'crew', 'icon'=>    '/img/yacht_icons/users.png', 'is_checked'=> 0]);
        Additions::create(['name'=>'captain', 'icon'=> '/img/yacht_icons/captain.png', 'is_checked'=> 0]);
        Additions::create(['name'=>'drink', 'icon'=>   '/img/yacht_icons/drinks.png', 'is_checked'=> 0]);
        Additions::create(['name'=>'music', 'icon'=>   '/img/yacht_icons/music.png', 'is_checked'=> 0]);
        Additions::create(['name'=>'shower', 'icon'=>  '/img/yacht_icons/shower.png', 'is_checked'=> 0]);
        Additions::create(['name'=>'air', 'icon'=>     '/img/yacht_icons/air-conditioner.png', 'is_checked'=> 0]);
        Additions::create(['name'=>'sports', 'icon'=>  '/img/yacht_icons/sports.png', 'is_checked'=> 0]);
    }
}
