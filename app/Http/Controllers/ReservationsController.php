<?php

namespace App\Http\Controllers;

use App\Models\Boat;
use App\Models\DailyReservationRecord;
use App\Models\Reservations;
use App\Repositories\Reservations as RepositoriesReservations;
use Carbon\CarbonPeriod;

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

    public function create(RepositoriesReservations $reservationsReppo)
    {
        $boats  = Boat::all(['name', 'id']);

        // dd(datePeriodsOverlap('2022-04-02 - 2022-04-04', '2022-04-01 - 2022-04-05'));

        if(auth()->user()->can('admin.reservation.read.other')){
            $reservations = $reservationsReppo->getReservations();
        } else {
            $reservations = $reservationsReppo->getOwnReservations();
        }

        $date_end   = request('date_end');
        $date_start = request('date_start');
        $ref        = request('reffer') ?? 'saveBtn';

        $reservedBoats = $reservationsReppo->getReservations()->pluck('boat_id')->intersect($boats->pluck('name'));
        $reservedBoats = $reservedBoats->contains('Otro') ? $reservedBoats->filter(function($value){return $value != 99;}) : $reservedBoats;

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

        $reservationPeriod = CarbonPeriod::create(request('date_start'), request('date_end'));
        $dailyReservation = [];


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
        foreach($reservationPeriod as $date){
            $dailyReservation[] = ['reservation_id' => $reservation->id,'reserved_date'=>$date->format('Y-m-d')];
        }
        DailyReservationRecord::insert($dailyReservation);
        return redirect()->back(301)->with(['success' => '¡Reserva Creada!','message'=> 'Puedes comprobar que tu reserva ha sido creada en el calendario.']);;
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
    public function update()
    {

        $reservation = Reservations::findOrFail(request('reservation_id'));

        $reservation->boat_id = request('boat');
        $reservation->client_name = request('client');
        $reservation->client_phone = request('phone');
        $reservation->status = request('status');
        $reservation->observations = request('observations') ?? '-';
        $reservation->last_updated_by = auth()->user()->id;

        $reservation->update();
        return redirect()->back()->with(['success' => '¡Reserva Actualizada!','message'=> 'Puedes comprobar que tu reserva ha sido actualizada de inmediato.']);
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
        return redirect()->back()->with(['success' => '¡Reserva Eliminada!','message'=> 'Su reserva ha sido eliminada.']);;
    }
}
