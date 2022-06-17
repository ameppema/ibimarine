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
            'consent'=> 'required'
        ], [
            'start_date.required'=>__('Please select a date to continue.'),
            'end_date.required'=>'',
            'consent.required'=>__('You must accept the privacy policies to continue')
        ]);

        $emailClients = ['jeanmacario048@gmail.com', 'reservas@ibimarine.com', 'ameppema@hotmail.com'];

        foreach ($emailClients as $client) {
            Mail::to($client)->queue(new MailReservationRequest($data));
        }

        return redirect()->back()->with('success','We have received your request.');
    }
    public function saleEmail(){
        $data = request()->validate([
            'boat_id' => 'required',
            'boat_name' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'consent'=> 'required'
        ], ['consent.required'=>__('You must accept the privacy policies to continue')]);

        $emailClients = ['jeanmacario048@gmail.com', 'reservas@ibimarine.com', 'ameppema@hotmail.com'];

        foreach ($emailClients as $client) {
            Mail::to($client)->queue(new MailSaleRequest($data));
        }

        return redirect()->back()->with('success','We have received your request.');
    }
}
