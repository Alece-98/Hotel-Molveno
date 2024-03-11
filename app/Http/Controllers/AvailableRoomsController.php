<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Collection;

class AvailableRoomsController extends Controller
{
    public function show(){
        $this->store();
        $rooms = $this->getRooms();
        return view('availablerooms', ['rooms' => $rooms]);
    }

    public function store(){

    }

    private function getRooms(): Collection{
        $rooms = Room::all();
        return $rooms;
    }
}
