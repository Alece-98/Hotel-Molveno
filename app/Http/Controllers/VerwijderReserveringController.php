<?php

namespace App\Http\Controllers;
use App\Models\ReservationModel;
class VerwijderReserveringController extends Controller
{
    

    public function destroy ($id)
    {
        $reservationToDestroy = ReservationModel::find($id);
        $reservationToDestroy->delete();


    }
}

