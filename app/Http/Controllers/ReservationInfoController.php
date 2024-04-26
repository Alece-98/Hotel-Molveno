<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Guest_Reservations;
use App\Models\ReservationModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class ReservationInfoController extends Controller
{
    public function show($id)
    {
        $guestRoomInfo = $this->getReservationById($id)[0];
        $arrivalDate = Carbon::parse($guestRoomInfo->arrival)->toDateString();
        $departureDate = Carbon::parse($guestRoomInfo->departure)->toDateString();
        $roomInfo = app('App\Http\Controllers\RoomController')->getRoomByRoomID($guestRoomInfo->room_id)[0];
        $guestId = $this->getGuestIdWithReservationId($id)[0]->guest_id;
        $guestInfo = $this->getGuestInfoWithId($guestId)[0];
        
        return view('reservationInfo', compact(['guestRoomInfo', 'roomInfo', 'guestInfo', 'arrivalDate', 'departureDate']));
    }

    public function post($reservationId)
    {
        $reservation = $this->getReservationById($reservationId);
        $guestId = $this->getGuestIdWithReservationId($reservation[0]->id)[0];
        $guestInfo = $this->getGuestInfoWithId($guestId->guest_id)[0];
        echo $guestInfo;


    }

    private function getReservationById($id) : Collection
    {
        return ReservationModel::where('id', $id)->get();
    }

    private function getGuestIdWithReservationId($reservationId)
    {
        return Guest_Reservations::where('reservation_task_id', $reservationId)->get();
    }

    private function getGuestInfoWithId($guestId)
    {
        return Guest::where('id', $guestId)->get();
    }
}
