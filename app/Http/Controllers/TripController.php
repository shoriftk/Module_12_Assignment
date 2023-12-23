<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{

    function trip(){
        return view('pages.trip');
    }

    function submit_trip(){
        return redirect()->route('bus.all-trip');
    }

}
