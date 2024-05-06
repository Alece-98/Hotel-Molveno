<?php

namespace App\Http\Controllers;

use App\Models\Reservation;

class CheckInController extends Controller
{
    public function checkIn($id)
    {
        $reservation = Reservation::find($id);
        
        if ($reservation->check_in === 'Checked in') { 
            $reservation->check_in = null;
        } 
        else {
            $reservation->check_in = 'Checked in';
        }

        $reservation->save();

        return redirect()->back();
    }
}
