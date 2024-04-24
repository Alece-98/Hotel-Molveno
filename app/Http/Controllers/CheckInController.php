<?php

namespace App\Http\Controllers;

use App\Models\ReservationTask;

class CheckInController extends Controller
{
    public function checkIn($id)
    {
        $reservation = ReservationTask::find($id);
        
        if ($reservation->comment === 'Checked in') { 
            $reservation->comment = null;
        } else {
            $reservation->comment = 'Checked in';
        }

        $reservation->save();

        return redirect()->back();
    }
}
