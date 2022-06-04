<?php

namespace App\Http\Controllers;

use App\Repositories\HomePage;

class HomePageController extends Controller
{
    public function index(HomePage $home){
        $hero = $home->getHeroImage();
        $cards = $home->getCards();

        return view('admin.home.home_page', compact('hero', 'cards'));
    }

    public function update(){

    }

}
