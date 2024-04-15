<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Room;
use App\Models\ReservationTask;
use Illuminate\Database\Eloquent\Relations;

class AddGuestController extends Controller
{
    private $reservation;

    public function __construct(){
        $this->middleware(function ($request, $next) {
            $this->reservation = session('reservation');
            return $next($request);
        });
    }
    public function show(){
        return view('addGuest', );
    }

    public function store(Request $request){
        $guest = $this->retrieveFillAndReturnGuest(new Guest(), $request);
        $guest->save();
        $this->reservation->save();
        $guest->reservationTask()->attach($this->reservation, ['guest_id' => $guest['id']]);
        // $room = Room::where("id", $this->reservation->getRoomID())->get();

        // dd(ReservationTask::whereBelongsTo($room)->get());
    }

    private function retrieveFillAndReturnGuest(Guest $guest, Request $request): Guest{
        $guest->setFirstName($request->input("firstname"));
        $guest->setLastName($request->input("lastname"));
        $guest->setPhoneNumber($request->input("phone"));
        $guest->setEmail($request->input("email"));
        $guest->setStreetName($request->input("streetname"));
        $guest->setHouseNumber($request->input("housenumber"));
        $guest->setCity($request->input("city"));
        $guest->setZipcode($request->input("zipcode"));
        $guest->setCountry($request->input("country"));

        return $guest;
    }

}
