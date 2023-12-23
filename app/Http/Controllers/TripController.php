<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{

    function trip()
    {
        
        return view('pages.trip');
    }

    function submit_trip(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'from' => 'required|string',
            'to' => 'required|string',
            'paribahan_name' => 'required|string',
            'total_seats' => 'required|integer',
            'date_of_journey' => 'required|date',
            'ticket_fare' => 'required|integer',
            'dep_time' => 'required|string',
            'arr_time' => 'required|string',
        ]);

        // Create a new trip using Eloquent
        Trip::create($validatedData);
        return redirect()->route('bus.all-trip');

    }

}
