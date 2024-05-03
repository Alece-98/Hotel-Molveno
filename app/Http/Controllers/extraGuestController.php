<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ExtraGuest;
use Illuminate\Http\Request;
class ExtraGuestController extends Controller
{

    private $reservation;

    public function show(){
        return view('extraGuest' );
    }

    public function store(Request $request){

        $this->reservation = session('reservation');
        $request->validate([
            'firstname' => 'required|max:32',
            'lastname'=> 'required|max:32',
            'phone' => 'required|max:10',
            'email' => 'required|email',
            'streetname' => 'required|max:255',
            'housenumber' =>'required|max:10',
            'city' => 'required|max:255',
            'zipcode' => 'required|max:6',
            'country' => 'required|max:32'

        ]);

        $extraGuest = new ExtraGuest();
        $extraGuest->first_name = $request->input('firstname');
        $extraGuest->last_name = $request->input('lastname');
        $extraGuest->phone = $request->input('phone');
        $extraGuest->email = $request->input('email');
        $extraGuest->street_name = $request->input('streetname');
        $extraGuest->house_number = $request->input('housenumber');
        $extraGuest->city = $request->input('city');
        $extraGuest->zipcode = $request->input('zipcode');
        $extraGuest->country = $request->input('country');

        $extraGuest->save();
        $extraGuest->reservationTask()->attach($this->reservation);

        return redirect('extraGuest')->send();
    }
}


