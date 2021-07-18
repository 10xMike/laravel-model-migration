<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripsController extends Controller
{
    public function index(){
        $trips = Trip::all();
        return view('trips.index', compact(trips));
    }
}
