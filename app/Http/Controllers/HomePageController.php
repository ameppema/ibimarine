<?php

namespace App\Http\Controllers;

use App\Repositories\HomePage;

class HomePageController extends Controller
{
    public function index(HomePage $home){
        $hero = $home->getHeroImage();

        return view('admin.home.home_page', compact('hero'));
    }

    public function update(){

    }

}
