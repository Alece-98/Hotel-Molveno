<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\PageButtonNavigationHandler;

class SelectReservationRoomController extends Controller
{
    use PageButtonNavigationHandler;

    public function __construct(){
        $this->middleware(function ($request, $next) {
            return $next($request);
        });
    }

    public function show(Request $request){
        return view('selectReservationRoom', ['rooms' => session('rooms'), 'reservation' => session('reservation')]);
    }

    public function store(Request $request){
        $room = $request->input('room');
        $reservation = session('reservation');
        $reservation->setRoomID((int)$room);
        session()->put('reservation', $reservation);
        session()->put('inputData', $request->all());
        return redirect()->route('AddGuest')->send();
    }

    public function goBack(){
        $data = session()->pull('inputData');
        return redirect()->route('MakeReservation')->withInput($data)->send();
    }
}
