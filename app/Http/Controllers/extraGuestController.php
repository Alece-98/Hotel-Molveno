<?php

namespace App\Http\Controllers;

use App\Models\extraGuest;
use Illuminate\Http\Request;

class extraGuestController extends Controller
{
    public function show(){
        return view('extraGuest', );
    }
    // public function store(Request $request)
    private function store (request $request) {
        // return view('extraGuest');
        $request->validate([
            'extraGuestName' => 'required|max:32',
            'extraGuestLastName'=> 'required|max:32',
            'extraGuestPhone' => 'required|max:10',
            'extraGuestEmail' => 'required|email',

        ]);
        $extraGuest = new extraGuest();
    }
}
