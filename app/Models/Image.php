<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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

    public static function assignGalleryId($temp_image_id, $belongs_to, $value){
        Image::where('gallery_id', $temp_image_id)
                ->where('belongs_to', $belongs_to)
                ->update(['gallery_id'=> $value ]);
    }

    public static function change(Request $request, $imageId, $image_alt = null){
        $image = Image::find($imageId);
        if($request->image)
        {
            Storage::delete('public/' . $image->image_src);

            $imageName = $request->file('image')->getClientOriginalName();

            $imageSrc = $request['image']->storeAs('boats', $imageName, 'public');

            $image->image_src = $imageSrc;
        }
        if($image_alt){
            $image->image_alt = $image_alt;
        }
    }
}
