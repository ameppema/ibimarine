<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveHomeCardRequest;
use App\Models\Image;
use App\Repositories\Translator;
use App\Models\HomeCard;

class HomeCardController extends Controller
{
    public function store(SaveHomeCardRequest $request){

        $data = $request->validated();

        $HomeCard = new HomeCard();
        $HomeCard->title = $data['title'];
        $HomeCard->description = $data['description'];
        $HomeCard->route = $data['route'] ?? 'home';

        $HomeCard->image = Image::store(request(),'home');

        if($HomeCard->save()){
            Translator::translate('home_cards', 'title', $HomeCard->id, $data['title_en']);
            Translator::translate('home_cards', 'description', $HomeCard->id, $data['description_en']);
            return redirect()->back()->with('success', '¡Operación Exitosa!');
        }
        return redirect()->back()->withErrors('message', 'Ha ocurrido un problema!');;
    }

    public function update(SaveHomeCardRequest $request, HomeCard $HomeCard){

        $data = $request->validated();

        $HomeCard->update( array_filter($data) );
        
        $HomeCard->updateTitleTranslate($data['title_en']);
        $HomeCard->updateDescriptionTranslate($data['description_en']);

        if(isset($data['image'])){
            Image::erase($HomeCard->image);
            $HomeCard->image = Image::store(request(),'home');
        }
        $HomeCard->save();
        return redirect()->back()->with('success', '¡Operación Exitosa!');
    }

    public function delete(HomeCard $HomeCard){
        Image::erase($HomeCard->image);
        $HomeCard->deleteTranslations();
        $HomeCard->delete();
        return redirect()->back()->with('success', '¡Operación Exitosa!');;
    }
}
