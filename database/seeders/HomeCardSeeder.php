<?php

namespace Database\Seeders;

use App\Models\HomeCard;
use App\Repositories\Translator;
use Illuminate\Database\Seeder;

class HomeCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $card = HomeCard::create([
            'title' => 'Alquiler de Yates',
            'description' => 'admin@admin.com',
            'route' => 'rent',
            'image' => 'Non',
        ]);
        Translator::translate('home_cards', 'title', $card->id, 'Yacht Rental');
        Translator::translate('home_cards', 'description', $card->id, 'Cras venenatis porta ligula sed suscipit. Ut in vehicula ex. Vivamus fermentum nunc mi, ac condimentum magna porttitor faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubila curae.');
        
        $card = HomeCard::create([
            'title' => 'Venta de Yates',
            'description' => 'Nulla at lectus at odio vulputate pellente in sed ipsum. Phasellus ut ligula ac sapien sodales incidunt. Cras diam felis, hendrerit sit amet quam vel, scelerisque dapibus libero, donec at lacus rhoncus, dignissim urna at.',
            'route' => 'sale',
            'image' => 'Non',
        ]);
        Translator::translate('home_cards', 'title', $card->id, 'Yacht Sale');
        Translator::translate('home_cards', 'description', $card->id, 'Nulla at lectus at odio vulputate pellente in sed ipsum. Phasellus ut ligula ac sapien sodales incidunt. Cras diam felis, hendrerit sit amet quam vel, scelerisque dapibus libero, donec at lacus rhoncus, dignissim urna at.');
        
        $card = HomeCard::create([
            'title' => 'Toys',
            'description' => 'Cras venenatis porta ligula sed suscipit. Ut in vehicula ex. Vivamus fermentum nunc mi, ac condimentum magna porttitor faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubila curae.',
            'route' => 'toys',
            'image' => 'Non',
        ]);
        Translator::translate('home_cards', 'title', $card->id, 'Toys');
        Translator::translate('home_cards', 'description', $card->id, 'Cras venenatis porta ligula sed suscipit. Ut in vehicula ex. Vivamus fermentum nunc mi, ac condimentum magna porttitor faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubila curae.');

        $card = HomeCard::create([
            'title' => 'Eventos',
            'description' => 'Nulla at lectus at odio vulputate pellente in sed ipsum. Phasellus ut ligula ac sapien sodales incidunt. Cras diam felis, hendrerit sit amet quam vel, scelerisque dapibus libero, donec at lacus rhoncus, dignissim urna at.',
            'route' => 'events',
            'image' => 'Non',
        ]);
        Translator::translate('home_cards', 'title', $card->id, 'Events');
        Translator::translate('home_cards', 'description', $card->id, 'Nulla at lectus at odio vulputate pellente in sed ipsum. Phasellus ut ligula ac sapien sodales incidunt. Cras diam felis, hendrerit sit amet quam vel, scelerisque dapibus libero, donec at lacus rhoncus, dignissim urna at.');

        $card = HomeCard::create([
            'title' => 'Noticias y Life Style',
            'description' => 'Cras venenatis porta ligula sed suscipit. Ut in vehicula ex. Vivamus fermentum nunc mi, ac condimentum magna porttitor faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubila curae.',
            'route' => 'news',
            'image' => 'Non',
        ]);
        Translator::translate('home_cards', 'title', $card->id, 'News & LifeStyle');
        Translator::translate('home_cards', 'description', $card->id, 'Cras venenatis porta ligula sed suscipit. Ut in vehicula ex. Vivamus fermentum nunc mi, ac condimentum magna porttitor faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubila curae.');

        $card = HomeCard::create([
            'title' => 'Contacto',
            'description' => 'Nulla at lectus at odio vulputate pellente in sed ipsum. Phasellus ut ligula ac sapien sodales incidunt. Cras diam felis, hendrerit sit amet quam vel, scelerisque dapibus libero, donec at lacus rhoncus, dignissim urna at.',
            'route' => 'contact',
            'image' => 'Non',
        ]);
        Translator::translate('home_cards', 'title', $card->id, 'Conatct');
        Translator::translate('home_cards', 'description', $card->id, 'Nulla at lectus at odio vulputate pellente in sed ipsum. Phasellus ut ligula ac sapien sodales incidunt. Cras diam felis, hendrerit sit amet quam vel, scelerisque dapibus libero, donec at lacus rhoncus, dignissim urna at.');
    }
}