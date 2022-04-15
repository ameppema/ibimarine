<?php

use Carbon\Carbon;

function date_to_human($date_string = '0000-00-00'){
    $date = explode('-', $date_string);

    $year = (int)$date[0];
    $month = (int)$date[1];
    $day = (int)$date[2];

    $date = Carbon::create($year, $month, $day);

    $date->locale('es');

    $date = $date->isoFormat('LL');

    

    return $date;
}

function date_to_human_short($date){
    return substr(date_to_human($date), 0, -7);
}