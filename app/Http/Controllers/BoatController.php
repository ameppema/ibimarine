<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveBoatRequest;
use App\Models\Additions;
use App\Models\Boat;
use App\Models\BoatAddition;
use App\Models\BoatFeatures;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BoatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addRent()
    {
        $boats = Boat::all(['id','name']);
        return view('admin.sections.addRent', compact('boats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBoat(SaveBoatRequest $request)
    {

        $features = new BoatFeatures($request->validated());

        $additions = request()->validate([
            'crew'=>'nullable',
            'captain'=>'nullable',
            'drink'=>'nullable',
            'music'=>'nullable',
            'shower'=>'nullable',
            'air'=>'nullable',
            'sports'=>'nullable',
        ]);
        
        $boat = new Boat($request->validated());
        
        
        $boat->save();
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
        $additions = Additions::all();
        return view('admin.sections.editRent', compact('boat', 'additions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function update(SaveBoatRequest $request,Boat $boat)
    {
        $data = $request->validated();

        $boat->name = $data['name'];
        $boat->description = $data['description'];
        $boat->is_recomended = request('is_recomended')? 1 : 0;
        $boat->low_season_price = $data['low_season_price'];
        $boat->high_season_price = $data['high_season_price'];

        $additions = request()->validate([
            'crew'=>'nullable',
            'captain'=>'nullable',
            'drink'=>'nullable',
            'music'=>'nullable',
            'shower'=>'nullable',
            'air'=>'nullable',
            'sports'=>'nullable',
        ]);
        


        $boat->features->length = request('length');
        $boat->features->beam = request('beam');
        $boat->features->engines = request('engines');
        $boat->features->c_velocity = request('c_velocity');
        $boat->features->max_speed = request('max_speed');
        $boat->features->fuel_comsuption = request('fuel_comsuption');
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
