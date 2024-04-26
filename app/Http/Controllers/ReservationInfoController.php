<?php

namespace App\Http\Controllers;

use App\Models\ReservationModel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ReservationInfoController extends Controller
{
    public function show($id)
    {
        $roomInfo = $this->getReservationById($id);
        return view('reservationInfo', compact(['roomInfo']));
    }

    private function getReservationById($id) : Collection
    {
        return ReservationModel::where('id', $id)->get();
    }
}
