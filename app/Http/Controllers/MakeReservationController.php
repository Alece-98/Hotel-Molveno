<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReservationTask;
use App\Models\Guest;
use App\Models\Room;
use App\Enums\RoomType;
use App\Enums\RoomView;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Validation\Validator;
use DateTime;

class MakeReservationController extends Controller
{
    public function show(){
        return view('MakeReservation', );
    }

    public function store(Request $request){
        $reservation = new ReservationTask();
        $room = new Room();

        $this->validate($request, [
            'adults' => 'required|integer|gte:0',
            'children' => 'required|integer|gte:0',
            'arrival' => 'required|date|after_or_equal:today',
            'departure' => 'required|date|after:arrival|after:today',
            'comment' => 'string|max:2047',
            'roomtype' => [new Enum(RoomType::class)],
            'roomview' => [new Enum(RoomView::class)],
            'handicap' => 'boolean',
            'babybed' => 'boolean',
        ], [
            'adults.required' => 'The amount of adults must be specified!',
            'adults.integer' => 'The amount of adults must be a number!',
            'adults.gte:0' => 'The amount of adults must be at least 0!',
            'children.required' => 'The amount of children must be specified!',
            'children.integer' => 'The amount of children must be a number!',
            'children.gte:0' => 'The amount of children must be at least 0!',
            'arrival.required' => 'The arrival date must be specified!',
            'arrival.date' => 'The arrival date must be a date!',
            'arrival.after_or_equal:today' => 'The arrival date has already passed!',
            'departure.required' => 'This departure date must be specified!',
            'departure.date' => 'The departure date must be a date!',
            'departure.after:arrival' => 'The departure date must be after the arrival date!',
            'departure.after:today' => 'The departure date has already passed!',
            'comment.string' => 'The comment must be a string!',
            'comment.max:2047' => 'The comment can not be this long - must be below 2048 characters',
            'handicap.boolean' => 'The handicap accessible value must be a boolean!',
            'babybed.boolean' => 'The babybed option must be a boolean!',
        ]);

        $reservation->setAdults(request('adults'));
        $reservation->setChildren(request('children'));
        $reservation->setArrival(request('arrival'));
        $reservation->setDeparture(request('departure'));
        $reservation->setComment(request('comment'));
        $reservation->setRoomType(request('roomtype'));
        $reservation->setRoomView(request('roomview'));
        $reservation->setHandicap($request->has('handicap'));
        $reservation->setHasBabyBed($request->has('babybed'));
        $reservation->setRoomId(1);

        /**
         * Stap 1: Verwijder uit de tabel `reservations` alles van room (room_type, room_view, baby_bed, handicap)
         * Stap 2: Om een room te selecteren, die voldoet aan de criteria:
         *              1: Haal alle rooms op die voldoen aan Adults, Children, type, view, bed/handicap
         *              2: Als de lijst leeg is (geen rooms voldoen hieraan), dan geef een error terug aan de gebruiker (melding geen room beschikbaar)
         *              2: Lijst niet leeg is: Van de rooms die je dan terugkrijgt (voldoen aan 1), kijk of deze (via reservations tabel) beschikbaar zijn (controleer de opgegeven tijd in formulier, met wat er in de database al staat!)
         *              3: Geen tijd beschikbaar: error
         *              3: Wel tijd beschikbaar: kies de eerste room die aan alles voldoet, en haal het room_id op.
         *              3.1: OF!!! Geef een lijst terug aan de frontend, en laat de gebruiker er een selecteren.
<<<<<<< HEAD
         *              4: Save vervolgens alle informatie (persoonlijke gegevens + room_id + datum + comments )      
         */

=======
         *              4: Save vervolgens alle informatie (persoonlijke gegevens + room_id + datum + comments )
         *
         *
         *
         */

        /*if(Room::find(1)) {
            $reservation->save();
        }else {
            echo "ERROR";
        }*/


>>>>>>> Felbe
        $rooms = $this->findAppropriateRooms(
            $reservation->getAmountOfPeople(),
            new DateTime(),
            new DateTime(),
            RoomType::tryFrom($reservation->getRoomType()),
            RoomView::tryFrom($reservation->getRoomView()),
            $reservation->hasBabyBed(),
            $reservation->getHandicap()
        );

        session()->flash('reservation', $reservation);
        session()->flash('rooms', $rooms);

        return redirect()->route('SelectReservationRoom');
    }



    private function convertToDate(string $date){
        return date_create_from_format('d/M/Y', date('d/M/Y', strtotime($date)));

    }

    private function findAppropriateRooms(int $capacity, DateTime $arrivalDate, DateTime $departureDate, RoomType $roomType, RoomView $roomView, bool $babyBed, bool $handicapAccessible): Collection{
        $rooms = Room::where([
            ['room_capacity', '>=', $capacity],
            ['room_type', $roomType],
            ['room_view', $roomView],
        ])->when($babyBed, function (Builder $query, string $role){
            $query->where('baby_bed', true);
        })->when($handicapAccessible, function (Builder $query, string $role){
            $query->where('handicap_accessible', true);
        })->get();

        return $rooms;
        
    }

    private function isRoomAvailableInPeriod(Room $room, DateTime $arrivalDate, DateTime $departureDate): bool{
        $reservations = Reservation::where([
            ['room_id', $room->getRoomID()],
        ])->get();
        foreach ($reservations as $reservation){
            if (
                $departureDate > $reservation->getArrival() || //Vertrek van A is later dan de aankomst van B - kamer is bezet
                $arrivalDate < $reservation->getDeparture() || //Aankomst van A is eerder dan vertrek van B - kamer is bezet
                $arrivalDate <= $reservation->getArrival() && $departureDate >= $reservation->getDeparture() //Reservering van A valt geheel in reservation van B
            ){
                return false;
            }
        }
        return true;
    }
}
