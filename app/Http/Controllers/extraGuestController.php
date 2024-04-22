<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\extraGuest;
use Illuminate\Http\Request;


class extraGuestController extends Controller
{
    public function show(){
        return view('extraGuest', );
    }
    public function store(Request $request){

        $request->validate([
            'extraGuestFirstName' => 'required|max:32',
            'extraGuestLastName'=> 'required|max:32',
            'extraGuestPhone' => 'required|max:10',
            'extraGuestEmail' => 'required|email',
            'extraGuestAdress' => 'required|max:255',
            'extraGuestHouseNumber' =>'required|max:10',
            'extraGuestCity' => 'required|max:255',
            'extraGuestZipcode' => 'required|max:6',
            'extraGuestCountry' => 'required|max:32'
            // 'extraGuestName' => 'required|max:32',
            // 'extraGuestLastName'=> 'required|max:32',
            // 'extraGuestPhone' => 'required|max:10',
            // 'extraGuestEmail' => 'required|email',
            // 'extraGuestAdress' => 'required|max:255',
            // 'extraGuestHouseNumber' =>'required|max:10',
            // 'extraGuestCity' => 'required|max:255',
            // 'extraGuestZipcode' => 'required|max:6',
            // 'extraGuestCountry' => 'required|max:32'

        ]);
        $extraGuest = new extraGuest();
        $extraGuest->extra_First_Name = $request->input('extraGuestFirstName');
        $extraGuest->extra_Last_Name = $request->input('extraGuestLastName');
        $extraGuest->extra_Phone = $request->input('extraGuestPhone');
        $extraGuest->extra_Email = $request->input('extraGuestEmail');
        // $extraGuest->extra_Adress = $request->input('extraGuestAdress');
        $extraGuest->extra_Adress = $request->input('extraGuestAdress');
        $extraGuest->extra_House_Number = $request->input('extraGuestHouseNumber');
        $extraGuest->extra_City = $request->input('extraGuestCity');
        $extraGuest->extra_Zipcode = $request->input('extraGuestZipcode');
        $extraGuest->extra_Country = $request->input('extraGuestCountry');

        $extraGuest->save();



        return redirect()->back()->with('Guest stored successfully!');
    }
}
