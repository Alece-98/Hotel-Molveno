<?php

namespace App\Http\Controllers;

use App\Models\ReservationModel;
use App\Models\RoomModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class RoomController extends Controller
{
    public function show()
    {
        $rooms = $this->getAllRoomsOrderByRoomNumber();
        $availability = $this->checkAvailability($rooms);

        return view('RoomOverview', compact(['rooms', 'availability']));
    }

    public function getAllRoomsOrderByRoomNumber(): Collection
    {
        return RoomModel::orderBy('number', 'asc')->get();
    }

    public function getAllReservationsWithRoomID($roomId): Collection
    {
        return ReservationModel::where('room_id', $roomId)->get();
    }

    public function checkAvailability($roomCollection)
    {
        $availabilityCollection = collect();
        foreach ($roomCollection as $room) {
            $availability = $this->checkAvailabilityByRoomByID($room->id);
            if ($availability != null) {
                $availabilityCollection->push($availability);
            }
            else{
                $availabilityCollection->push("available");
            }
        }
        return $availabilityCollection;
    }

    public function checkAvailabilityByRoomByID($roomId)
    {
        $reservations = $this->getAllReservationsWithRoomID($roomId);
        $availabilityArr = array();

        // soms zijn er meerdere reserveringen met hetzelfde room id
        // met die reden heb ik een foreach gebruikt zodat het programma
        // langs elke reservering gaat en vervolgens in een tijdelijke array in zet of die
        // desbetreffende reservering op dit momment bezet is

        foreach ($reservations as $reservation) {

            if ($this->isDateBetweenArrivalDeparture(Carbon::parse($reservation->arrival)->format("m-d-Y"), Carbon::parse($reservation->departure)->format("m-d-Y"), Carbon::now()->format("m-d-Y")) == "occupied") {
                array_push($availabilityArr, "occupied");
            }
            else
            {
                array_push($availabilityArr, "available");
            }
        }

        // als er een reservering is die wel bezet is,
        // wordt er vervolgens gekeken of dat occupied bestaat in de array en is de kamer bezet
        // als er geen occupied in de array staat, is de kamer beschikbaar

        if (in_array("occupied", $availabilityArr)) 
        {
            return "occupied";
        }
        else
        {
            return "available";
        }
    }

    public function isDateBetweenArrivalDeparture($arrival, $departure, $date): string
    {
        if ($arrival <= $date && $departure >= $date) {
            return "occupied";
        } else {
            return "available";
        }
    }
}
