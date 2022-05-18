<?php

namespace App\Http\Controllers;

use App\Mail\MailReservationRequest;
use App\Mail\MailSaleRequest;
use App\Mail\MailSaleRequst;
use Illuminate\Support\Facades\Mail;

class MailReservationRequestController extends Controller
{
    public function rentEmail(){
        $data = request()->validate([
            'boat_id' => 'required',
            'boat_name' => 'required',
            'season_price' => 'nullable',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        Mail::to('jeanmacario048@gmail.com')->queue(new MailReservationRequest($data));

        return redirect()->back()->with('success','Perición de reserva reliazada con exito. ');
    }
    public function saleEmail(){
        $data = request()->validate([
            'boat_id' => 'required',
            'boat_name' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        Mail::to('jeanmacario048@gmail.com')->queue(new MailSaleRequest($data));

        return redirect()->back()->with('success','Perición de reserva reliazada con exito. ');
    }
}