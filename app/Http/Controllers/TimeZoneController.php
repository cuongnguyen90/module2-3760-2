<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TimeZoneController extends Controller
{
    public function getTimeZone($timezone)
    {
        $_timezone = preg_replace('/-/','/',$timezone);
        $time = Carbon::now($_timezone)->toTimeString();
        return view('index',compact('time',$time,'timezone',$_timezone));
    }
}
