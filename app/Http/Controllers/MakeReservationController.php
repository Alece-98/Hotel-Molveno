<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReservationTask;
use App\Models\Guest;
use App\Models\Room;
use App\Enums\RoomType;
use App\Enums\RoomView;

class MakeReservationController extends Controller
{
    public function show(){
        return view('makereservation', );
    }

    public function store(){
        $reservation = new ReservationTask();
        $reservingGuest = new Guest();
        $room = new Room();
        $reservingGuest->setFirstName(request('firstname'));
        $reservingGuest->setLastName(request('lastname'));
        $reservingGuest->setPhoneNumber(request('phone'));
        $reservingGuest->setEmail(request('email'));
        $reservingGuest->setStreetName(request('streetname'));
        $reservingGuest->setHouseNumber(request('housenumber'));
        $reservingGuest->setHouseNumberAddition(request('housenumberaddition'));
        $reservingGuest->setCity(request('city'));
        $reservingGuest->setZipcode(request('zipcode'));
        $reservingGuest->setCountry(request('country'));
        $reservation->setReservingGuest($reservingGuest);
        $reservation->addGuest($reservingGuest);
        $room->setRoomType(request('roomtype'));
        $room->setRoomView(request('roomview'));
        //$room->setRoomType('Standard');
        //$room->setRoomView('Standard');
        $room->addReservation($reservation);
        return view('roomreserved', ['room' => $room]);
    }


}
