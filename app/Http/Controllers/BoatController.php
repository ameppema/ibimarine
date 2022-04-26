<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveBoatRequest;
use App\Models\Boat;
use App\Models\Additions;
use App\Models\BoatFeatures;
use App\Models\Image;
use App\Models\SimilarBoat;
use App\Repositories\Boats;
use App\Repositories\Translator;
use Illuminate\Support\Facades\App;

class BoatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addRent()
    {
        $boats = Boat::getRentBoats(['id','name']);
        return view('admin.sections.addRent', compact('boats'));
    }
    public function addSale()
    {
        $boats = Boat::getSaleBoats(['name','id']);
        return view('admin.sections.addSale', compact('boats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBoat(SaveBoatRequest $request, Boats $boats)
    {

        $boat = new Boat($request->validated());

        $features = new BoatFeatures($request->validated());

        $additions = $boats->getAdditions($request);
        
        $boat->slug = $boats->getSlug($boat->name);

        $boat->sale_price = request('is_sale') ? request('sale_price') || '' : null;
        
        $boat->save();

        if(request('description_en')) Translator::translate('boats','description', $boat->id, request('description_en'));

        Image::assignGalleryId($request->temporal_token, 'boats', $boat->id);

        if($request->similar_boats){
            foreach ($request->similar_boats as $boat_id) {
                $similar_boats[] = ['boat_id'=> $boat->id, 'similar_boat_id' => $boat_id];
            }
            SimilarBoat::insert($similar_boats);
        }

        $boat->additions()->sync($additions);

        $boat->features()->save($features);

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function edit(Boat $boat)
    {
        $boats = Boat::getRentBoats(['id','name']); 
        $additions = Additions::all();
        $gallery = Image::getGallery($boat->id);
        $boat_description_en = Translator::getTranslate('boats','description',$boat->id)->translation ?? '';
        return view('admin.sections.editRent', compact('boat', 'boats','additions', 'gallery', 'boat_description_en'));
    }
    public function editSale(Boat $boat)
    {
        $boats = Boat::getSaleBoats(['id','name']); 
        $additions = Additions::all();
        $gallery = Image::getGallery($boat->id);
        return view('admin.sections.editSale', compact('boat', 'boats','additions', 'gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function update(SaveBoatRequest $request,Boat $boat, Boats $boats)
    {
        $similar_boats = [];

        $data = $request->validated();

        Translator::updateTranslate('boats','description', $boat->id, request('description_en'));

        SimilarBoat::where('boat_id', $boat->id)->delete();
        if($request->similar_boats){
            foreach ($request->similar_boats as $boat_id) {
                $similar_boats[] = ['boat_id'=> $boat->id, 'similar_boat_id' => $boat_id];
            }
            SimilarBoat::insert($similar_boats);
        }

        $boat->name = $data['name'];
        $boat->description = $request->description_es ?? '';
        $boat->is_recomended = request('is_recomended')? 1 : 0;
        $boat->low_season_price = $data['low_season_price'];
        $boat->high_season_price = $data['high_season_price'];

        $additions = $boats->getAdditions($request);
        


        $boat->features->length = request('length');
        $boat->features->beam = request('beam');
        $boat->features->engines = request('engines');
        $boat->features->c_velocity = request('c_velocity');
        $boat->features->max_speed = request('max_speed');
        $boat->features->fuel_consumption = request('fuel_consumption');
        $boat->features->pax = request('pax');
        $boat->features->bathroom = request('bathroom');
        $boat->features->cabins = request('cabins');
        $boat->features->year = request('year');
        $boat->features->port = request('port');
        $boat->features->model = request('model');

        
        $boat->push();
        $boat->additions()->sync($additions);

        return redirect()->back(302);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boat $boat)
    {
        $boat->delete();
        return redirect()->back();
    }
}
