<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class menuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::insert([
            [
                'name'=>'inicio',
                'route'=>'home',
                'sort_order'=>1,
            ],
            [
                'name'=>'Alquiler',
                'route'=>'rent',
                'sort_order'=>2,
            ],
            [
                'name'=>'Venta',
                'route'=>'sale',
                'sort_order'=>3,
            ],
            [
                'name'=>'Toys',
                'route'=>'toys',
                'sort_order'=>4,
            ],
            [
                'name'=>'Eventos',
                'route'=>'events',
                'sort_order'=>5,
            ],
            [
                'name'=>'Noticias',
                'route'=>'news',
                'sort_order'=>6,
            ],
            [
                'name'=>'Contacto',
                'route'=>'contact',
                'sort_order'=>7,
            ],
            [
                'name'=>'Area Privada',
                'route'=>'privarea',
                'sort_order'=>8,
            ]
        ]);

        DB::table('translations')->insert([
            [
                'table'=>'menus',
                'column'=>'name',
                'row_id'=>1,
                'locale'=>'en',
                'translation'=>'home'
            ],
            [
                'table'=>'menus',
                'column'=>'name',
                'row_id'=>2,
                'locale'=>'en',
                'translation'=>'rent'
            ],
            [
                'table'=>'menus',
                'column'=>'name',
                'row_id'=>3,
                'locale'=>'en',
                'translation'=>'sale'
            ],
            [
                'table'=>'menus',
                'column'=>'name',
                'row_id'=>4,
                'locale'=>'en',
                'translation'=>'toys'
            ],
            [
                'table'=>'menus',
                'column'=>'name',
                'row_id'=>5,
                'locale'=>'en',
                'translation'=>'events'
            ],
            [
                'table'=>'menus',
                'column'=>'name',
                'row_id'=>6,
                'locale'=>'en',
                'translation'=>'news'
            ],
            [
                'table'=>'menus',
                'column'=>'name',
                'row_id'=>7,
                'locale'=>'en',
                'translation'=>'contact'
            ],
            [
                'table'=>'menus',
                'column'=>'name',
                'row_id'=>8,
                'locale'=>'en',
                'translation'=>'private area'
            ],
        ]);
    }
}
