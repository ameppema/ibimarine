<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Toy;
use App\Repositories\Translator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ToyController extends Controller
{
    public function index(){
        $toys = Toy::all(['id','title','description','image']);
        return view('admin.toys.toy', compact('toys'));
    }
    public function edit(Toy $toy){
        return view('admin.toys.editToy', compact('toy'));
    }

    public function store(){

        $data = request()->validate([
            'title'=> 'required',
            'title_en'=> 'required',
            'description'=> 'required',
            'description_en'=> 'required',
            'image'=> 'required|image'
        ]);

        $Toy = new Toy;
        $Toy->title = $data['title'];
        $Toy->description = $data['description'];

        $Toy->image = Image::store(request(),'toys');

        if($Toy->save()){
            Translator::translate('toys', 'title', $Toy->id, $data['title_en']);
            Translator::translate('toys', 'description', $Toy->id, $data['description_en']);
            return redirect()->back();
        }
        return request();
    }

    public function update(Toy $toy){

        $data = request()->validate([
            'title'=> 'required',
            'title_en'=> 'required',
            'description'=> 'required',
            'description_en'=> 'required',
            'image'=> 'image'
        ]);

        $toy->title = $data['title'];
        $toy->updateTitleTranslate($data['title_en']);
        $toy->description = $data['description'];
        $toy->updateDescriptionTranslate($data['description_en']);

        if(isset($data['image'])){
            Storage::delete('public/', $toy->image);
            $toy->image = Image::store(request(),'toys');
        }
        $toy->save();
        return redirect()->back();
    }

    public function delete(Toy $toy){
        Storage::delete('public/' . $toy->image);
        $toy->delete();
        return redirect()->back();
    }
}
