<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
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
