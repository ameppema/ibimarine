<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactPage = Contact::create([
            'description'=>'Cras venenatis porta ligula sed suscipit. Ut in vehicula ex. Vivamus fermentum nunc mi. \n  Cras venenatis porta ligula sed suscipit. Ut in vehicula ex. Vivamus fermentum nunc mi, ac condimentum magna porttitor faucibus. Ut in vehicula ex. Vivamus fermentum nunc',
            'image'=>'none',
        ]);

        DB::table('translations')->insert(
            [
                'table'=>'contact',
                'column'=>'description',
                'row_id'=>$contactPage->id,
                'locale'=>'en',
                'translation'=>'EN_:Cras venenatis porta ligula sed suscipit. Ut in vehicula ex. Vivamus fermentum nunc mi. \n  Cras venenatis porta ligula sed suscipit. Ut in vehicula ex. Vivamus fermentum nunc mi, ac condimentum magna porttitor faucibus. Ut in vehicula ex. Vivamus fermentum nunc'
            ]
        );
    }
}
