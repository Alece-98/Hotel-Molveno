<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Room;
use App\Models\ReservationTask;
use Illuminate\Database\Eloquent\Relations;
use App\Traits\PageButtonNavigationHandler;

class AddGuestController extends Controller
{
    use PageButtonNavigationHandler;

    private $reservation;

    public function __construct(){
        $this->middleware(function ($request, $next) {
            $this->reservation = session('reservation');
            return $next($request);
        });
    }
    public function show(){
        session()->put('reservation', $this->reservation);
        return view('addGuest', [$reservation = $this->reservation]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email:rfc,dns',
            'streetname' => 'required|string|max:63',
            'housenumber' => 'required|string|max:7',
            'city' => 'required|string|max:63',
            'zipcode' => 'required|string|max:7',
            'country' => 'required|string|max:63',
        ]);
        $guest = $this->retrieveFillAndReturnGuest(new Guest(), $request);
        $guest->save();
        $this->reservation->save();
        $guest->reservationTask()->attach($this->reservation);
        return redirect("SeeReservations")->send();
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

    public function goBack(){
        $data = session()->pull('inputData');
        $data = session()->put('inputData', $data);
        return redirect()->route('SelectReservation')->withInput($data)->send();
    }

}
