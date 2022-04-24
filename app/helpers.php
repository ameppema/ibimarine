<?php

use Carbon\Carbon;
use Illuminate\Support\Str;

/* General */

/* Active Link functions */
function isActive($routeName, $classActive = 'bg-blue-500'){
    return request()->routeIs($routeName) ? $classActive.' ' : '';
}
function isRoute($routePath, $classActive = 'bg-blue-500'){
    return request()->is($routePath) ? $classActive.' ' : '';
}

/* DATES */

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

/**
 * Compares if two dates are equals
 * @param string $dateStr1 'YYYY-MM-DD' i.e. '0000-00-00'
 * @param string $dateStr2
 * @return bool
 */
function isSameDate($dateStr1, $dateStr2): bool{

    $dateStr1_parts = explode('-', $dateStr1);
    $dateStr2_parts = explode('-', $dateStr2);

    $date1 = Carbon::create($dateStr1_parts[0],$dateStr1_parts[1],$dateStr1_parts[2]);
    $date2 = Carbon::create($dateStr2_parts[0],$dateStr2_parts[1],$dateStr2_parts[2]);

    return $date1->equalTo($date2);
}

/**
 * Converts a raw string date to its Year, Month, and Day parts.
 * @param string $dateString 'YYYY-MM-DD' i.e. '0000-00-00'
 * @return string[]
 */
function dateParts($dateString, $asNumber = false): array{
    [$year, $month, $day] = explode('-', $dateString);
    return $asNumber ? [ (int)$year, (int)$month, (int)$day] 
                     : [$year, $month, $day];
}

function datesToPeriod($date_start,$date_end){
    return $date_start . ' - ' . $date_end;
}

function periodToDates($period, $separator =' - '){
    return explode($separator, $period);
}

/**
 * @param string $range1 - '2022-01-01 - 2022-01-03' 
 * @param string $range2 - '2022-01-01 - 2022-01-03'
 */

function datePeriodsOverlap($range1, $range2) {
    list($start, $end) = explode(' - ', $range1);
    $start = new DateTime($start);
    $end =  new DateTime($end);
    $start1 = min($start, $end);
    $end1 = max($start, $end);
    list($start, $end) = explode(' - ', $range2);
    $start = new DateTime($start);
    $end =  new DateTime($end);
    $start2 = min($start, $end);
    $end2 = max($start, $end);
    // check for special cases
    if ($start1 >= $start2 && $end1 <= $end2) {
        // range1 completely contained inside range2
        $overlap = $start1->diff($end1);
    }
    elseif ($start2 >= $start1 && $end2 <= $end1) {
        // range2 completely contained inside range1
        $overlap = $start2->diff($end2);
    }
    elseif ($end2 > $end1) {
        // range1 ends first
        $overlap = $start2->diff($end1);
    }
    else {
        // range2 ends first
        $overlap = $start1->diff($end2);
    }
    // if overlap is < 0 then there is no overlap
    $overlap_days = $overlap->invert ? 0 : ($overlap->format('%a') + 1);
    return "overlap is $overlap_days days";
}

function periodsHaveOverlap($start_time1, $end_time1, $start_time2, $end_time2){
    return (($start_time1) <=  ($end_time2) && ($start_time2) < ($end_time1) ? true : false);
}

/* Forms */

function checkbox_to_bool($value){
    return $value ? 1 : 0;
}

/* Strings */

function makeToken($length = 16){
    return Str::random($length);
}

/* Boat Front End */

function is_low_season(){
    $currentMonth = Carbon::now()->month;
    $low_season_months = collect(['6','9']);
    return $low_season_months->contains($currentMonth);
}
function is_high_season(){
    $currentMonth = Carbon::now()->month;
    $low_season_months = collect(['7','8']);
    return $low_season_months->contains($currentMonth);
}

function feature_display_name($name){
    $displayNames = collect(['c_velocity'=>'cruising velocity', 'fuel_comsuption'=> 'fuel comsuption', 'max_speed'=> 'max speed']);
    return $displayNames->contains(function($value, $key) use($name){
        return $name === $key;
    }) ? $displayNames->get($name) : $name;

}