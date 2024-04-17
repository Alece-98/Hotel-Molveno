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
            'extraGuestName' => 'required|max:32',
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
        $extraGuest->extraGuestName = $request->input('extraGuestName');
        $extraGuest->extraGuestLastName = $request->input('extraGuestLastName');
        $extraGuest->extraGuestPhone = $request->input('extraGuestPhone');
        $extraGuest->extraGuestEmail = $request->input('extraGuestEmail');
        $extraGuest->extraguestAdress = $request->input('extraGuestAdress');
        $extraGuest->extraguestAdress = $request->input('extraGuestAdress');
        $extraGuest->extraGuestHouseNumber = $request->input('extraGuestHouseNumber');
        $extraGuest->extraGuestCity = $request->input('extraGuestCity');
        $extraGuest->extraGuestZipcode = $request->input('extraGuestZipcode');
        $extraGuest->extraGuestCountry = $request->input('extraGuestCountry');



        return redirect()->back()->with('Guest stored successfully!');
    }
}
