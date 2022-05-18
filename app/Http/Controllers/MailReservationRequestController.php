<?php

namespace App\Http\Controllers;

use App\Mail\MailReservationRequest;
use Illuminate\Support\Facades\Mail;

class MailReservationRequestController extends Controller
{
    public function handleEmail(){
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
        return new MailReservationRequest($data);
    }
}
