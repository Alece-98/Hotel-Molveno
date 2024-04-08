<?php
    namespace App\Classes;

    use App\Models\Room;
    use App\Models\ReservationTask;

    abstract class RoomPriceCalculator{
        const BABY_BED_PRICE = 750;
        const ADULT_BREAKFAST_PRICE = 1450;
        const CHILD_BREAKFAST_PRICE = 1000;

        public static function calculateReservationCostInCents(ReservationTask $reservation, Room $room): string
        {
    
            $roomPrice = $room->getPricePerNight();
            $nights = $reservation->calculateNights();
            $children = $reservation->getChildren();
            $adults = $reservation->getAdults();
            $hasBabyBed = $reservation->hasBabyBed();

    
            $totalPrice = 
            (self::calculateRoomPriceMultiplier($roomPrice) +
            self::calculateBabyBedMultiplier($hasBabyBed) +
            self::calculateBreakfastMultiplier($adults, $children)) *
            $nights; 
           
            return $totalPrice;
        }
    
        //If something were to change about the room price, the function is already in place to accommodate
        private static function calculateRoomPriceMultiplier(int $roomPrice): int{
            return $roomPrice; 
        }
    
        private static function calculateBabyBedMultiplier(bool $hasBabyBed): int{
            return (int)$hasBabyBed * self::BABY_BED_PRICE;
        }
    
        private static function calculateBreakfastMultiplier(int $adults, int $children): int{
            return $adults * self::ADULT_BREAKFAST_PRICE + $children * self::CHILD_BREAKFAST_PRICE;
        }

        public static function formatToEuro(int $cents){
            $cents = $cents/100;
            return "€ " . number_format($cents, 2, ',', '.');
        }

    }
?>