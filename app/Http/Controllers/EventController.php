<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Image;
use App\Repositories\Translator;

class EventController extends Controller
{
    public function index(){
        $events  = Event::all();
        return view('admin.events.events', compact('events'));
    }

    public function edit(Event $event){
        return view('admin.events.editEvent', compact('event'));
    }
    public function store(){
        $data = request()->validate([
            'image' => 'required|image',
            'description' => 'required',
            'description_en' => 'required'
        ]);

        $Event = new Event;

        $Event->description = $data['description'];
        $Event->image = Image::store(request(),'events');

        if($Event->save()){
            Translator::translate('events', 'description', $Event->id, $data['description_en']);
            return redirect()->back();
        }
        return request();
    }

    public function update(Event $event){
        $data = request()->validate([
            'image' => 'nullable|image',
            'description' => 'required',
            'description_en' => 'required'
        ]);


        $event->description = $data['description'];
        $event->updateDescriptionTranslate($data['description_en']);
    
        if(isset($data['image'])){
            Storage::delete('public/', $event->image);
            $event->image = Image::store(request(),'events');
        }
        $event->save();
        return redirect()->back();
    }

    public function delete(Event $event){
        Image::erase($event->image);
        $event->delete();
        $event->deleteTranslations();
        return redirect()->back();
    }
}
