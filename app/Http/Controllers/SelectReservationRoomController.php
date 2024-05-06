<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\PageButtonNavigationHandler;
use Illuminate\Database\Eloquent\Collection;

class SelectReservationRoomController extends Controller
{
    use PageButtonNavigationHandler;

    public function __construct(){
        $this->middleware(function ($request, $next) {
            return $next($request);
        });
    }

    public function show(Request $request){
        //dd(session()->get('reservation'));
        return view('selectReservationRoom', ['rooms' => session('rooms'), 'reservation' => session('reservation')]);
    }

    public function store(Request $request){
        $room = $request->input('room');
        $reservation = session('reservation');
        $reservation->setRoomID((int)$room);
        $guests = new Collection();
        session()->put('reservation', $reservation);
        session()->put('inputData', $request->all());
        session()->put('guests', $guests);
        return redirect()->route('AddGuest')->send();
    }

    public function goBack(){
        $data = session()->pull('inputData');
        return redirect()->route('MakeReservation')->withInput($data)->send();
    }
}
