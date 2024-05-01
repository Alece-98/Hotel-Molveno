<?php

namespace App\Http\Controllers;

use App\Models\ReservationTask;
class VerwijderReserveringController extends Controller
{
    public function old($id)
    {
        $reservation = ReservationTask::find($id);
        if ($reservation->old === 'old') { 
            $reservation->old = null;
        } else {
            $reservation->old = 'old';
        }

        $reservation->save();

        return redirect()->back();
    }
}


