<?php

namespace App\Http\Controllers;

use App\Models\Rooms_Reservations;

class Rooms_ReservationsController extends Controller
{
    public function getAll()
    {
        return Rooms_Reservations::all();
    }
}
