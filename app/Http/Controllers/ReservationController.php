<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationModel;
use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function show()
    {
        $reservations = $this->getAllReservations();
        $temp = $this->getActiveReservations();
        $dateToday = $this->todayDate();

        return view('Dashboard', compact(['reservations','dateToday', 'temp']));
    }

    public function getAllReservations(): Collection
    {
        return ReservationModel::all();
    }

    public function getReservationsByRoomID($roomID):Collection
    {
        return ReservationModel::where('room_id', $roomID)->get();
    }

    public function getReservationsByArrival():Collection
    {
        // SELECT * FROM `reservations` WHERE `arrival` < '4/3/2024' AND `departure` > '4/3/2024'
        $arrival = ReservationModel::where('arrival', '<', Carbon::now())->get();

        return $arrival;
    }

    public function getReservationsByDeparture():Collection
    {
        // SELECT * FROM `reservations` WHERE `arrival` < '4/3/2024' AND `departure` > '4/3/2024'
        $departure = ReservationModel::where('departure', '>', Carbon::now())->get();

        return $departure;
    }

    public function getActiveReservations()
    {
        $arrival = $this->getReservationsByArrival();
        $departure = $this->getReservationsByDeparture();
        $dateArray = [];

        foreach ($arrival as $singleArrival) {
            foreach ($departure as $singleDeparture) {
                if ($singleArrival->id == $singleDeparture->id) {
                    array_push($dateArray, $singleArrival->id);
                }
            }
        }

        return $dateArray;
    }

    public function todayDate()
    {
        $date = Carbon::now()->toDateString();
        $parsedDate = Carbon::parse($date)->format('m-d-Y');
        return $parsedDate;
    }

    public function calculateReservationCost(Request $request)
    {
        
        $type = $request->input('type');
        $days = $request->input('days', 1); 
        $needBabyBed = $request->has('needBabyBed'); 
        $adultBreakfast = $request->input('adultBreakfast', 0);
        $childBreakfast = $request->input('childBreakfast', 0);

        
        $roomPrices = ['economy' => 100, 'standard' => 200, 'luxury' => 300];
        $babyBedPrice = 7.50;
        $adultBreakfastPrice = 14.50;
        $childBreakfastPrice = 10;

        
        $totalPrice = isset($roomPrices[$type]) ? $roomPrices[$type] * $days : 0;

        
        if ($needBabyBed) {
            $totalPrice += $babyBedPrice * $days;
        }

        $totalPrice += $adultBreakfastPrice * $adultBreakfast * $days;
        $totalPrice += $childBreakfastPrice * $childBreakfast * $days;

        
        return response()->json(['totalCost' => $totalPrice]);
    }
}
