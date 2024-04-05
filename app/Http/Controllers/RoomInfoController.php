<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomInfoController extends Controller
{
    

    public function show($id)
    {
        $room = Room::findOrFail($id);
        // Omzetten van 1/0 naar Yes/No 
        $room->baby_bed = $room->baby_bed ? 'Yes' : 'No';
        $room->handicap_accessible = $room->handicap_accessible ? 'Yes' : 'No';
        return view('room_details', compact('room')); 
    }
}
