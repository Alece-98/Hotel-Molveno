<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationTask extends Model
{
    use HasFactory;

    private DateTime $dateStart;
    private DateTime $dateEnd;
    private Employee $creator; #Employee
    private Guest $reservingGuest; #Guest
    private array $guests;
    private string $uuid;
    private bool $hasBreakfast;

    public function __construct(DateTime $dateStart, DateTime $dateEnd, $creator, $reservingGuest, array $guests){
    }

    private function getDateStart(){

    }

    private function setDateStart(){

    }

    private function getDateEnd(){

    }

    private function setDateEnd(){

    }

    public function getDateInterval(): array{
        return $this->dateInterval;
    }

    public function setDateInterval($dateStart, $dateEnd): bool{
        if ($dateEnd <= $dateStart){
            return false;
        }
        else{
            $this->dateStart = $dateStart;
            $this->dateEnd = $dateEnd;
            return true;
        }
    }

    public function getCreator(): Employee{
        return $this->creator;
    }

    public function setCreator($employee): bool{
        if ($employee != null){
            $this->creator = $employee;
            return true;
        }
        else{
            return false;
        }
    }

    public function getReservingGuest(): Guest{
        return $this->reservingGuest;
    }

    public function setReservingGuest($guest): bool{
        if ($guest != null){
            $this->reservingGuest = $guest;
            return true;
        }
        else{
            return false;
        }
    }

    public function getGuests(): array{
        return $this->guests;
    }

    public function setGuests(array $guests): bool{
        $this->guests = $guests;
    }



}
