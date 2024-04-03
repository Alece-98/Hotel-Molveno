<?php

namespace App\Http\Controllers;

use App\Models\RoomModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class RoomController extends Controller
{
    public function show()
    {
        $rooms = $this->getAllRoomOrderByRoomNumber();
        return view('RoomOverview', compact(['rooms']));
    }

    // public function getAllRooms(): Collection
    // {
    //     return RoomModel::all();
    // }

    public function getAllRoomsOrderedById(): Collection
    {
        return RoomModel::orderBy('id', 'asc')->get();
    }

    public function getAllRoomOrderByRoomNumber(): Collection
    {
        return RoomModel::orderBy('room_number', 'asc')->get();
    }

    public function todayDate()
    {
        $date = Carbon::now()->toDateString();
        $parsedDate = Carbon::parse($date)->format('m-d-Y');
        return $parsedDate;
    }
}
