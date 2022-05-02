<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Image;
use App\Repositories\Translator;

class NewsController extends Controller
{
    public function index(){
        $news  = News::all();
        return view('admin.news.news', compact('news'));
    }

    public function edit(News $news){
        return view('admin.news.newsEdit', compact('news'));
    }
    public function store(){
        $data = request()->validate([
            'image' => 'required|image',
            'description' => 'required',
            'description_en' => 'required'
        ]);

        $news = new News;

        $news->description = $data['description'];
        $news->image = Image::store(request(),'news');

        if($news->save()){
            Translator::translate('news', 'description', $news->id, $data['description_en']);
            return redirect()->back();
        }
        return request();
    }

    public function update(News $news){
        $data = request()->validate([
            'image' => 'nullable|image',
            'description' => 'required',
            'description_en' => 'required'
        ]);


        $news->description = $data['description'];
        $news->updateDescriptionTranslate($data['description_en']);
    
        if(isset($data['image'])){
            Image::erase($news->image);
            $news->image = Image::store(request(),'news');
        }
        $news->save();
        return redirect()->back();
    }

    public function delete(News $news){
        Image::erase($news->image);
        $news->delete();
        $news->deleteTranslations();
        return redirect()->back();
    }
}
