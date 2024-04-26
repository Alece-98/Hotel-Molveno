<?php

namespace App\Http\Controllers;

use App\Models\ReservationTask;
class VerwijderReserveringController extends Controller
{
    public function old($id)
    {
        $reservation = ReservationTask::find($id);
        $reservation->old = 'old';
        $reservation->save();

        return redirect()->back();
    }
}

