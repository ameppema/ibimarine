<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all('id','name','image','slug');
        return view('admin.brands.brands', compact('brands'));
    }

    public function store(){
        $data = request()->validate([
            'name'=> 'required',
            'slug'=> 'required',
            'image'=> 'required'
        ]);

        $Brand = new Brand($data);

        $Brand->image = Image::store(request(), 'brands');

        if($Brand->save()){
            return redirect()->back();
        }
        return request();
    }

    public function update(){
        $data = request()->validate([
            'brand_id'=> 'required',
            'name'=> 'nullable',
            'slug'=> 'nullable',
            'image'=> 'nullable'
        ]);

        $brand = Brand::findOrFail($data['brand_id']);
        $brand->update( array_filter($data) );
        
        if(isset($data['image'])){
            Image::erase($brand->image);
            $brand->image = Image::store(request(), 'brands');
            $brand->save();
        }
        return redirect()->back();
    }

    public function getByAjax($id){  
        return Brand::findOrFail($id);
    }

    public function delete(Brand $brand){
        if(Image::erase($brand->image)){
            $brand->delete();
            return redirect()->back();
        }
        return request();
    }
}
