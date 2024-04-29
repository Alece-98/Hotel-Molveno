<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;


class SeeReservationController extends Controller
{
    public function showAllReservations()
    {
        $roomsWithReservations = Room::with('reservations')
        ->whereHas('reservations', function ($query) {
        $query->whereNull('old');
        })
        ->get();

        
        return view('SeeReservations', compact('roomsWithReservations'));
    }
}
