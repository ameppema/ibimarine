<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Image;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::first(['id','description','image', 'phone_es', 'phone_en']);
        return view('admin.sections.contact', compact('contact'));
    }
    public function update(Request $request){
        $contact = Contact::findOrFail(1);
        $contact->description = $request->description;
        $contact->updateDescriptionTranslate($request->description_en);

        if(isset($request->image)){
            Image::erase($contact->image);
            $contact->image = Image::store($request, 'contact');
        }
        $contact->save();

        return redirect()->back()->with('success', 'Pagina de Contacto Actualizada!');
    }

    public function updatePhones(){
        $contact = Contact::findOrFail(1);

        $contact->phone_es = request('phone_es');
        $contact->phone_en = request('phone_en');

        $contact->save();
        return redirect()->back()->with('success', 'Telefonos Actualizados');
    }
}
