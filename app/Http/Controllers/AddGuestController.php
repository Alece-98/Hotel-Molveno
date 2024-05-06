<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Guest;
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
        $hidden=$this->hiddenButton();
        $reservation = $this->reservation;
        session()->put('reservation', $this->reservation);
        return view('addGuest', compact(["hidden", "reservation"]));
    }

    private function hiddenButton() {
        if($this->reservation->getAdults() > 1 && $this->reservation->getAdults() < 5) {
            return "notHidden";
        }
        else
        {
            return "hidden";
        }
    }

    public function store(Request $request){
        $reservation = session('reservation');
        $guests = session('guests');

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
        $guests->push($guest); //Ignore the IDE error, it does not know that $guests will be a Collection
        if ($reservation->getPeopleLeftToReserve() <= 1){
            $reservation->save();
            foreach($guests as $guest){
                $guest->save();
                $guest->reservation()->attach($this->reservation);
            }
            return redirect("SeeReservations")->send();
        }
        else {
            $reservation->decrementPeopleToReserve();
            return redirect()->route('AddGuest')->send();
        }

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
        return redirect()->route('SelectReservation')->send();
    }
}
