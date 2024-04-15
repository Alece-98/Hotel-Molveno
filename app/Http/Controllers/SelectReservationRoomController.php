<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectReservationRoomController extends Controller
{

    private $rooms;
    private $reservation;

    public function __construct(){
        $this->middleware(function ($request, $next) {
            $this->rooms = session('rooms');
            $this->reservation = session('reservation');
            return $next($request);
        });
    }

    public function show(){
        return view('selectReservationRoom', ['rooms' => $this->rooms, 'reservation' => $this->reservation]);
    }

    public function store(Request $request){
        $room = $request->input('room');
        $this->reservation->setRoomID((int)$room);
        session()->put('reservation', $this->reservation);
        return redirect()->route('AddGuest');
    }
}
