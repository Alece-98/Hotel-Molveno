<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReservationTask;
use App\Models\Guest;
use App\Models\Room;
use App\Enums\RoomType;
use App\Enums\RoomView;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;
use DateTime;

class MakeReservationController extends Controller
{
    public function show(){
        return view('MakeReservation', );
    }

    public function store(Request $request){
        $reservation = new ReservationTask();
        $reservingGuest = new Guest();
        $room = new Room();

        $reservingGuest->setFirstName(request('firstname'));
        $reservingGuest->setLastName(request('lastname'));
        $reservingGuest->setPhoneNumber(request('phone'));
        $reservingGuest->setEmail(request('email'));
        $reservingGuest->setStreetName(request('streetname'));
        $reservingGuest->setHouseNumber(request('housenumber'));
        $reservingGuest->setCity(request('city'));
        $reservingGuest->setZipcode(request('zipcode'));
        $reservingGuest->setCountry(request('country'));
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
        $reservingGuest->save();

        /**
         * Stap 1: Verwijder uit de tabel `reservations` alles van room (room_type, room_view, baby_bed, handicap)
         * Stap 2: Om een room te selecteren, die voldoet aan de criteria:
         *              1: Haal alle rooms op die voldoen aan Adults, Children, type, view, bed/handicap
         *              2: Als de lijst leeg is (geen rooms voldoen hieraan), dan geef een error terug aan de gebruiker (melding geen room beschikbaar)
         *              2: Lijst niet leeg is: Van de rooms die je dan terugkrijgt (voldoen aan 1), kijk of deze (via reservations tabel) beschikbaar zijn (controleer de opgegeven tijd in formulier, met wat er in de database al staat!)
         *              3: Geen tijd beschikbaar: error
         *              3: Wel tijd beschikbaar: kies de eerste room die aan alles voldoet, en haal het room_id op.
         *              3.1: OF!!! Geef een lijst terug aan de frontend, en laat de gebruiker er een selecteren.
         *              4: Save vervolgens alle informatie (persoonlijke gegevens + room_id + datum + comments )
         *               
         * 
         * 
         */

        $rooms = $this->findAppropriateRooms(
            $reservation->getAmountOfPeople(),
            new DateTime(),
            new DateTime(),
            RoomType::tryFrom($reservation->getRoomType()),
            RoomView::tryFrom($reservation->getRoomView()),
            $reservation->hasBabyBed(),
            $reservation->getHandicap()
        );
        dd($rooms);
        return view('roomreserved', ['rooms' => $rooms]);
        //return view('roomreserved', ['room' => $room]);
    }

    private function convertToDate(string $date){
        return date_create_from_format('d/M/Y', date('d/M/Y', strtotime($date)));
       
    }

    private function findAppropriateRooms(int $capacity, DateTime $arrivalDate, DateTime $departureDate, RoomType $roomType, RoomView $roomView, bool $babyBed, bool $handicapAccessible): Collection{
        $rooms = Room::where([
            ['capacity', '>=', $capacity],
            ['type', $roomType],
            ['view', $roomView],
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
