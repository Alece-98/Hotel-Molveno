<?php

namespace App\Http\Controllers;

use App\Models\ReservationModel;
use App\Models\RoomModel;
use App\Models\Rooms_Reservations;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class RoomController extends Controller
{
    public function show()
    {
        $rooms = $this->getAllRoomsOrderByRoomNumber();

        // $roomID = 18;

        // $reservation = $this->getReservationIDWithRoomID($roomID);
        // $roomByID = $this->getRoomByID($roomID);
        // $availability = $this->checkAvailabilityByRoomByID($roomID);

        // return view('RoomOverview', compact(['rooms', 'availability', 'reservation', 'roomByID']));
        return view('RoomOverview', compact(['rooms']));
    }

    // use room id to get reservation id using rooms_reservations
    // use reservation id to search the reservation arrival and departure date
    // check if the date today is in between arrival and departure..
    // if true -> active reservation, echo "occupied"
    // if false -> not active reservation, echo "available"

    // public function getAllRooms(): Collection
    // {
    //     return RoomModel::all();
    // }

    public function checkAvailabilityByRoomByID($id)
    {
        // $rooms = $this->getAllRoomsOrderByRoomNumber();
        $reservation = collect();
        $singleReservationID = collect();

        // foreach ($rooms as $room) {
        //     $reservation = $this->getReservationIDWithRoomID($room->id);
        // }

        $reservation = $this->getReservationIDWithRoomID($id);

        foreach ($reservation as $seperateReservation) {

            $singleReservationID = $this->getSingleReservationWithID($seperateReservation->reservation_id);
        }

        $available = collect($this->isDateBetweenArrivalDeparture($singleReservationID[0]->arrival, $singleReservationID[0]->departure, Carbon::now()));

        // return $available;

        if ($available == true) {
            return "available";
        }
        else
        {
            return "occupied";
        }
    }

    public function getAllRoomsOrderedById(): Collection
    {
        return RoomModel::orderBy('id', 'asc')->get();
    }

    public function getAllRoomsOrderByRoomNumber(): Collection
    {
        return RoomModel::orderBy('number', 'asc')->get();
    }

    public function getRoomByID($id)
    {
        return RoomModel::where('id', $id)->get();
    }

    public function getReservationIDWithRoomID($id): Collection
    {
        return Rooms_Reservations::where('room_id', $id)->get();
    }

    public function getSingleReservationWithID($id): Collection
    {
        return ReservationModel::where('id', $id)->get();
    }

    public function isDateBetweenArrivalDeparture($arrival, $departure, $date): bool
    {
        if ($arrival < $date && $departure > $date) {
            return true;
        } else {
            return false;
        }
    }

    // public function getAllReservationsIDWithRoomID()
    // {
    //     $rooms = $this->getAllRoomsOrderedById();
    //     $roomsReservations = array();

    //     foreach ($rooms as $room) 
    //     {
    //         array_push($roomsReservations, $this-> getReservationIDWithRoomID($room->id));
    //     }

    //     // foreach ($roomsReservations as $key) {
    //     //     echo "<pre>";
    //     //     echo $key;
    //     //     echo "</pre>";
    //     // }

    //     return $roomsReservations;
    // }
}