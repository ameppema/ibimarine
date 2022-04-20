<?php

namespace App\Http\Controllers;

use App\Models\Boat;
use App\Models\Reservations;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reservation.calendar');
    }

    public function create()
    {
        $reservations = Reservations::select('reservations.*', 'users.name as user', 'boats.name as boat_name')
                                    ->whereBetween('start_date', [request('date_start'), request('date_end')])
                                    ->orWhereBetween('end_date', [request('date_start'), request('date_end')])
                                    ->join('users', 'reservations.made_by', 'users.id')
                                    ->join('boats', 'reservations.boat_id', 'boats.id')
                                    ->get();

        $boats        = Boat::all(['name', 'id']);


        $date_end   = request('date_end');
        $date_start = request('date_start');
        $ref        = request('reffer') ?? 'saveBtn';

        $reservedBoats = $reservations->pluck('boat_id')->intersect($boats->pluck('id'));
        // dd($reservedBoats);

        return view('admin.reservation.reservations', compact('date_start','date_end', 'reservations', 'ref', 'boats', 'reservedBoats'));

    }

    public function getByAjax(){
        $reservations = Reservations::select('reservations.start_date','reservations.end_date',  'users.name as user', 'boats.name as boat_name')
        ->whereBetween('start_date', [request('date_start'), request('date_end')])
        ->orWhereBetween('end_date', [request('date_start'), request('date_end')])
        ->join('users', 'reservations.made_by', 'users.id')
        ->join('boats', 'reservations.boat_id', 'boats.id')
        ->get();

        return response()->json($reservations);
    }

    public function getOneByAjax($id){
        return Reservations::findOrFail($id);
    }

    public function store()
    {

        $data = request()->validate([
            'boat' => ['required'],
            'client' => ['required'],
            'phone' => ['required'],
            'status' => ['required'],
            'date_start' => ['required'],
            'date_end' => ['required'],
            'made_by' => ['required'],
            'observations' => ['nullable'],
        ]);

        $reservation = new Reservations();

        $reservation->boat_id = $data['boat'];
        $reservation->start_date = $data['date_start'];
        $reservation->end_date = $data['date_end'];
        $reservation->client_name = $data['client'];
        $reservation->client_phone = $data['phone'];
        $reservation->made_by = $data['made_by'];
        $reservation->status = $data['status'];
        $reservation->observations = $data['observations'] ?? '-';
        $reservation->last_updated_by = auth()->user()->id ?? 'none';

        $reservation->save();

        return redirect()->back(301);
    }

    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservations $reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Reservations $reservations)
    public function update()
    {

        // return request();
        $reservation = Reservations::find(request('reservation_id'));

        $reservation->boat_id = request('boat');
        $reservation->client_name = request('client');
        $reservation->client_phone = request('phone');
        $reservation->status = request('status');
        $reservation->observations = request('observations') ?? '-';
        $reservation->last_updated_by = request('last_updated_by');

        $reservation->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function destroy($reservations)
    {
        $reservation = Reservations::find($reservations);
        $reservation->delete();
        return redirect()->back();
    }
}
