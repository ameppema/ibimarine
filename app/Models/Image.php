<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
    'image_src',
    'image_alt',
    'sort_order',
    'gallery_id',
    'belongs_to',
    'gallery_type',];

    public static function getGallery($gallery_id){
        $gallery = Image::where('gallery_id', $gallery_id)->get();
        return $gallery;
    }

    public static function store($request, $directoyName = 'images' ,$image_name = 'image'){
        $filename = time() . '-' . $request->file($image_name)->getClientOriginalName();
        $filePath = $request['image']->storeAs($directoyName, $filename, 'public');

        return $filePath;
    }

    public static function upload(Request $request, $options){

        $image_alt = $options['image_alt'] ?? '';
        $modelName = $options['belongs_to'] ?? 'gallery';
        $sort_order = $options['sort_order'] ?? 0;
        $gallery_id = $options['gallery_id'] ?? 0;
        $belongs_to = $options['belongs_to'] ?? 0;
        $gallery_type = $options['belongs_to'] ?? 0;

        if($request->image){

            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $filePath = $request['image']->storeAs($modelName, $filename, 'public');

            $image = Image::create([
                'image_src' => $filePath,
                'image_alt' => $image_alt,
                'sort_order' => $sort_order,
                'gallery_id' => $gallery_id,
                'belongs_to' => $belongs_to,
                'gallery_type' => $gallery_type,
            ]);

            return $image;
        }
    }
    public static function UpdateImage(Request $request, $options = []){

        $image = Image::find($options['image_id']);

        if($image){

            Storage::delete('public/' . $image->image_src);

            $image_alt = $options['image_alt'] ?? $image->alt;
            $modelName = $options['belongs_to'] ?? $image->belongs_to;
            $sort_order = $options['sort_order'] ?? $image->sort_order;
            $gallery_id = $options['gallery_id'] ?? $image->gallery_id;
            $belongs_to = $options['belongs_to'] ?? $image->belongs_to;
            $gallery_type = $options['gallery_type'] ?? $image->gallery_type;

            $filename = time() . '-' . $request->file('image')->getClientOriginalName();
            $filePath = $request['image']->storeAs($modelName, $filename, 'public');

            $image->image_src = $filePath;
            $image->image_alt = $image_alt;
            $image->sort_order = $sort_order;
            $image->gallery_id = $gallery_id;
            $image->belongs_to = $belongs_to;
            $image->gallery_type = $gallery_type;
            $image->save();
            return $image;
        } else {
            return false;
        }
    }

    public static function assignGalleryId($temp_gallery_id, $belongs_to, $value){
        Image::where('gallery_id', $temp_gallery_id)
                ->where('belongs_to', $belongs_to)
                ->update(['gallery_id'=> $value ]);
    }

    public static function updateOrUpload($request, $options){
        $image = Image::find($options['image_id']);

        if($image){
            return Image::UpdateImage($request, $options);
        }else {
            return Image::upload($request, $options);
        }
    }

    public static function erase($image_path, $disk = 'public/'){
        return Storage::delete($disk . $image_path);
    }
}
