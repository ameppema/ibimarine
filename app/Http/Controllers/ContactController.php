<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\HomeCard;
use App\Models\Image;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = HomeCard::where('route', 'contact')->first(['id','description','image']) ??  Contact::first(['id','description','image', 'phone_es', 'phone_en']);
        $phones = Contact::first(['phone_es', 'phone_en']);
        return view('admin.sections.contact', compact('contact', 'phones'));
    }

    public function update(Request $request){
        $contact = Contact::findOrFail(1);
        $contactCard = HomeCard::where('route', 'contact')->first();

        $contact->description = $request->description;
        $contactCard->description = $request->description;
        $contact->updateDescriptionTranslate($request->description_en);
        $contactCard->updateDescriptionTranslate($request->description_en);

        if(isset($request->image)){
            Image::erase($contact->image);
            Image::erase($contactCard->image);
            $contact->image = Image::store($request, 'contact');
            $contactCard->image = Image::store($request, 'contact');
        }
        $contact->save();
        $contactCard->save();

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
