<?php

namespace App\Http\Controllers;

use App\Models\RoomModel;
use App\Models\Room;
use Illuminate\Database\Eloquent\Collection;

class RoomController extends Controller
{
    public function show()
    {
        $rooms = $this->getAllRoomOrderByRoomNumber();
        return view('RoomOverview', compact('rooms'));
    }

    // public function getAllRooms(): Collection
    // {
    //     return RoomModel::all();
    // }

    public function getAllRoomsOrderedById(): Collection
    {
        return Room::orderBy('id', 'asc')->get();
    }

    public function getAllRoomOrderByRoomNumber(): Collection
    {
        return Room::orderBy('number', 'asc')->get();
    }
}
