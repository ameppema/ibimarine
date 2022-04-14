<?php

namespace App\Http\Controllers;

use App\Models\Boat;
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
        return view('admin.sections.addRent');
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
    public function storeBoat()
    {
        $data = request()->validate([
            'boat_name' => ['required'],
            'description_es' => ['required'],
            'low_season_price' => ['required'],
            'high_season_price' => ['required'],
        ]);

        $boat = new Boat();

        $boat->name         = $data['boat_name'];
        $boat->description  = $data['description_es'];
        $boat->slug         =  Str::slug($data['boat_name']);
        $boat->is_recomended= request('is_recomended') ? 1 : 0;
        $boat->low_season_price= $data['low_season_price'];
        $boat->high_season_price= $data['high_season_price'];

        $boat->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function show(Boat $boat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function edit(Boat $boat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boat $boat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boat  $boat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boat $boat)
    {
        //
    }
}
