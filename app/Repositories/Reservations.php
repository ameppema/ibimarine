<?php

namespace App\Repositories;

use App\Models\Reservations as Reservation;

class Reservations {

    public function getReservations(){
        return Reservation::select('reservations.*', 'mb.name as made_by_user', 'lub.name  as update_by_user', 'boats.name as boat_name')
                        ->whereBetween('start_date', [request('date_start'), request('date_end')])
                        ->orWhereBetween('end_date', [request('date_start'), request('date_end')])
                        ->leftJoin('users As mb', 'reservations.made_by', 'mb.id')
                        ->leftJoin('users As lub', 'reservations.last_updated_by', 'lub.id')
                        ->leftJoin('boats', 'reservations.boat_id', 'boats.id')
                        ->orderBy('start_date')
                        ->get();
    }
    public function getOwnReservations(){
        return Reservation::where('made_by', auth()->user()->id)
        ->select('reservations.*', 'users.name as user', 'boats.name as boat_name')
        ->whereBetween('start_date', [request('date_start'), request('date_end')])
        ->WhereBetween('end_date', [request('date_start'), request('date_end')])
        ->leftJoin('users', 'reservations.made_by', 'users.id')
        ->leftJoin('boats', 'reservations.boat_id', 'boats.id')
        ->orderBy('start_date')
        ->get();
    }

    public function getReserves(){
        return Reservation::select('reservations.*', 'users.name as user', 'boats.name as boat_name')
        
        ->whereBetween('start_date', [request('date_start'), request('date_end')])
        ->orWhereBetween('end_date', [request('date_start'), request('date_end')])

        ->leftJoin('users', 'reservations.made_by', 'users.id')
        ->leftJoin('boats', 'reservations.boat_id', 'boats.id')
        ->get();
    }
}