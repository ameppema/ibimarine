<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = explode('-',request('date_start'));
        $date2 = explode('-',request('date_end'));

        $year = (int)$date[0];
        $month = (int)$date[1];
        $day = (int)$date[2];

        $year2 = (int)$date2[0];
        $month2 = (int)$date2[1];
        $day2 = (int)$date2[2];


        $str_date = Carbon::create($year, $month, $day);
        $str_date2 = Carbon::create($year2, $month2, $day2);
        
        $str_date->locale('es');
        $str_date2->locale('es');

        $date_start = $str_date->isoFormat('LL');
        $date_end = $str_date2->equalTo($str_date) ? null : $str_date2->isoFormat('LL');
        return view('admin.reservation.reservations', compact('date_start','date_end'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function show(Reservations $reservations)
    {
        //
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
    public function update(Request $request, Reservations $reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservations  $reservations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservations $reservations)
    {
        //
    }
}
