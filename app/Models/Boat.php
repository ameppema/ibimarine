<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BoatFeatures;
use App\Models\Additions;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

class Boat extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'high_season_price',
        'low_season_price',
        'is_recomended'
    ];

    public function features(){
        return $this->hasOne(BoatFeatures::class);
    }

    public function getFeatures(){
        return BoatFeatures::where('boat_id', $this->id)->first(['length','beam','engines','c_velocity','max_speed','fuel_comsuption','pax','bathroom','cabins','year','port','model']);
    }

    public function additions()
    {
        return $this->belongsToMany(Additions::class);
    }

    public function getCover(){
        $CoverImage = Image::where('gallery_id', $this->id)->first('image_src');
        return $CoverImage->image_src ?? 'boats/default.jpg';
    }
    public function getGallery(){
        return Image::where('gallery_id', $this->id)->orderBy('sort_order')->get(['image_src', 'image_alt']);
    }

    public function silimarBoats(){
        return $this->hasMany(SimilarBoat::class);
    }
}
