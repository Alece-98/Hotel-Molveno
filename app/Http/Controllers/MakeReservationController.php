<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReservationTask;
use App\Models\Guest;
use App\Models\Room;

class MakeReservationController extends Controller
{
    public function show(){
        return view('makereservation', );
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
        $reservingGuest->setHouseNumberAddition(request('housenumberaddition'));
        $reservingGuest->setCity(request('city'));
        $reservingGuest->setZipcode(request('zipcode'));
        $reservingGuest->setCountry(request('country'));
        $reservation->setReservingGuest($reservingGuest);
        $reservation->addGuest($reservingGuest);
    }


}
