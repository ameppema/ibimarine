<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{

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
    public function store(Request $request)
    {
        $options = [
            'image_alt' => $request->image_alt,
            'belongs_to' => $request->belongs_to,
            'gallery_id' => $request->gallery_id,
            'gallery_type' => $request->gallery_type,
            'sort_order' => $request->sort_order,
        ];

        $image = Image::upload($request, $options);

        return response(['message'=> 'success', 'data' => $image],201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return response(request());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($image_id)
    {

        $image = Image::find($image_id);
        if($image){
            Storage::delete('public', $image->image_src);
            $image->delete();
            redirect()->back()->with(['message' => 'Imagen eliminada']);
        }
        return redirect()->back()->withErrors(['message' => 'Imagen eliminada']);
    }
}
