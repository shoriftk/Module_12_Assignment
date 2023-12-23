<?php

namespace App\Http\Controllers;

class FindController extends Controller
{
    function find(){
        return view('pages.find');
    }

    function search(){
        
    }

    function show(){
        return view('pages.show');
    }

    function buy(){
        return view('pages.buy');
    }

    function submit_buy() {
        return redirect()->route('bus.purchased-ticket');
    }
}
