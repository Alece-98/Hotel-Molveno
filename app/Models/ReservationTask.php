<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Eloquent\Collection;
use DateTime;


class ReservationTask extends Task
{
    use HasFactory;

    //Table name for database
    private $roomType;
    private $roomView;
    private $isHandicapAccessible;
    private $hasBabyBed;

    protected $table = 'reservations';

    protected $fillable = ['room_id','date_start', 'date_end', 'creator', 'reserving_guest', 'guests', 'uuid', 'has_breakfast', 'comments'];

    public function __construct(){
        #UUID Method here
        $guests = [];
    }

    public static function fillWithData(DateTime $dateStart, DateTime $dateEnd, Employee $creator, Guest $reservingGuest, array $guests, bool $hasBreakfast){
        $this->setDateStart($dateStart);
        $this->setDateEnd($dateEnd);
        $this->setCreator($creator);
        $this->setReservingGuest($reservingGuest);
        $this->setGuests($guests);
        $this->setHasBreakfast($hasBreakfast);
    }

    public function getDateStart(): DateTime{
        return $this->dateStart;
    }

    public function setDateStart(DateTime $dateStart): bool{
        $this->dateStart = $dateStart;
        return true;
    }

    public function getDateEnd(): DateTime{
        return $this->dateEnd;
    }

    public function setDateEnd(DateTime $dateEnd): bool{
        $this->dateEnd = $dateEnd;
    public function setAdults(int $adults){
        $this->attributes['adults'] = $adults;
    }

    public function getChildren(): int{
        return $this->attributes['children'];
    }

    public function setChildren(int $children){
        $this->attributes['children'] = $children;
    }

    public function getAmountOfPeople(): int{
        return $this->getAdults() + $this->getChildren();
    }

    public function hasBabyBed(): bool{
        return $this->attributes['baby_bed'];
    }

    public function setHasBabyBed(bool $hasBabyBed){
        $this->attributes['baby_bed'] = $hasBabyBed;
    }

    public function getHandicap(): bool{
        return $this->attributes['handicap'];
    }

    public function setHandicap(bool $isHandicapAccessible){
        $this->attributes['handicap'] = $isHandicapAccessible;
    }

    public function getRoomType(): string{

        return $this->roomType;
    }

    public function setRoomType(string $roomType){
        $this->roomType = $roomType;
    }

    public function getRoomView(): string{
        return $this->roomView;
    }

    public function setRoomView(string $roomView){
        $this->roomView = $roomView;
    }

    public function getDateStart(): DateTime{
        $this->attributes['arrival'];
    }

    public function setDateStart(DateTime $dateStart): void{
        $this->attributes['arrival'];
    }

    public function getDateEnd(): DateTime{
        return $this->attributes['departure'];
    }

    public function setDateEnd(DateTime $dateEnd): void{
        $this->attributes['departure'];
    }

    public function getDateInterval(): array{
        return $this->dateInterval;
    }

    public function setDateInterval($dateStart, $dateEnd): bool{
        if ($dateEnd <= $dateStart){
            return false;
        }
        else{
            $this->setDateStart($dateStart);
            $this->setDateEnd($dateEnd);
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

    public function addGuest(Guest $guest): void{
        if (!is_null($this->guests)){
            array_push($this->guests, $guest);
        }
        else{
            $this->guests = [];
        }
    }

    public function getHasBreakfast(): bool{
        return $this->hasBreakfast;
    }

    public function setHasBreakfast(bool $hasBreakfast): bool{
        $this->hasBreakfast = $hasBreakfast;
    }

    public function getComments(): array{
        return $this->comments;
    }

    public function addComment(string $comment): bool{
        if ($comment != null){
            array_push($this->comments, $comment);
            return true;
        }
        else{
            return false;
        }
    }

    public function calculateNights(): int{
        return (int)date_diff(
            DateTime::createFromFormat('Y-m-d', $this->attributes['departure']),
            DateTime::createFromFormat('Y-m-d', $this->attributes['arrival']))->format('%d');
    }

    public function calculateDays(): int{
        return calculateNights() + 1;
    }



}
