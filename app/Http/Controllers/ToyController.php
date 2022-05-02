<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use App\Models\Image;
use App\Repositories\Translator;
use App\Http\Requests\SaveToyRequest;

class ToyController extends Controller
{
    public function index(){
        $toys = Toy::all(['id','title','description','image']);
        return view('admin.toys.toy', compact('toys'));
    }
    public function edit(Toy $toy){
        return view('admin.toys.editToy', compact('toy'));
    }

    public function store(SaveToyRequest $request){

        $data = $request->validated();

        $Toy = new Toy;
        $Toy->title = $data['title'];
        $Toy->description = $data['description'];

        $Toy->image = Image::store(request(),'toys');

        if($Toy->save()){
            Translator::translate('toys', 'title', $Toy->id, $data['title_en']);
            Translator::translate('toys', 'description', $Toy->id, $data['description_en']);
            return redirect()->back()->with('success', '¡Operación Exitosa!');
        }
        return redirect()->back()->withErrors('message', 'Ha ocurrido un problema!');;
    }

    public function update(SaveToyRequest $request,Toy $toy){

        $data = $request->validated();

        $toy->update( array_filter($data) );
        
        $toy->updateTitleTranslate($data['title_en']);
        $toy->updateDescriptionTranslate($data['description_en']);

        if(isset($data['image'])){
            Image::erase($toy->image);
            $toy->image = Image::store(request(),'toys');
        }
        $toy->save();
        return redirect()->back()->with('success', '¡Operación Exitosa!');
    }

    public function delete(Toy $toy){
        Image::erase($toy->image);
        $toy->deleteTranslations();
        $toy->delete();
        return redirect()->back()->with('success', '¡Operación Exitosa!');;
    }
}
