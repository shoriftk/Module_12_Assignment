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
            'journey_date' => 'required|string',
            'ticket_fare' => 'required|integer',
            'dep_time' => 'required|string',
            'arr_time' => 'required|string',
        ]);

        //Create a new trip using Eloquent
        // $trip = new Trip();
        // $trip->from = $validatedData["from"];
        // $trip->to = $validatedData["to"];
        // $trip->paribahan_name = $validatedData["paribahan_name"];
        // $trip->total_seats = $validatedData["total_seats"];
        // $trip->date_of_journey = $validatedData["journey_date"];
        // $trip->ticket_fare = $validatedData["ticket_fare"];
        // $trip->dep_time = $validatedData["dep_time"];
        // $trip->arr_time = $validatedData["arr_time"];
        // $trip->save();

        $data = [
            'from' => $request->from,
            'to' => $request->to,
            'paribahan_name' => $request->paribahan_name,
            'total_seats' => $request->total_seats,
            'date_of_journey' => $request->journey_date,
            'ticket_fare' => $request->ticket_fare,
            'dep_time' => $request->dep_time,
            'arr_time' => $request->arr_time,
        ];
        Trip::create($data);
        return redirect()->back();

    }

}
