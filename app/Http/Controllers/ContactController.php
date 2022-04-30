<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Image;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::first(['id','description']);
        return view('admin.sections.contact', compact('contact'));
    }
    public function update(Request $request){
        $contact = Contact::findOrFail(1);
        $contact->descripttion = $request->description;
        $contact->updateDescriptionTranslate($request->description_en);

        return redirect()->back();
    }
}
