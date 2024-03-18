<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Eloquent\Collection;


class ReservationTask extends Task
{
    use HasFactory;


    //Table name for database
    protected $table = 'reservations';

    protected $fillable = ['room_id','date_start', 'date_end', 'creator', 'reserving_guest', 'guests', 'uuid', 'has_breakfast', 'comments'];

    private DateTime $dateStart;
    private DateTime $dateEnd;
    private Employee $creator; #Employee
    private Guest $reservingGuest; #Guest
    private array $guests = [];
    private string $uuid = "";
    private bool $hasBreakfast = false;
    private array $comments = [];


    //Table name for database
    protected $table = 'reservations';



    public function __construct(){
        #UUID Method here
    }

    public function getAdults(): int{
        return $this->attributes['adults'];
    }

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

    public function setHasBabyBed(bool $babyBed){
        $this->attributes['baby_bed'] = $babyBed;
    }

    public function getHandicap(): bool{
        return $this->attributes['handicap'];
    }

    public function setHandicap(bool $handicap){
        $this->attributes['handicap'] = $handicap;
    }

    public function getRoomType(): string{
        return $this->attributes['room_type'];
    }

    public function setRoomType(string $roomType){
        $this->attributes['room_type'] = $roomType;
    }

    public function getRoomView(): string{
        return $this->attributes['room_view'];
    }

    public function setRoomView(string $roomView){
        $this->attributes['room_view'] = $roomView;
    }

    public function getDateStart(): string{
        return $this->attributes['date_start'];
    }

    public function setDateStart(string $dateStart): void{
        $this->attributes['date_start'];
    }

    public function getDateEnd(): string{
        return $this->attributes['date_end'];
    }

    public function setDateEnd(string $dateEnd): void{
        $this->attributes['date_end'];
    }

    public function getDateInterval(): array{
    }

    public function setDateInterval($dateStart, $dateEnd): void{
    }

    public function getCreator(): Employee{
        return $this->attributes['creator'];
    }

    public function setCreator(Employee $employee): void{
        $this->attributes['creator'] = (array)$employee;
    }

    public function getReservingGuest(): Guest{
        return $this->attributes['reserving_guest'];
    }

    public function setReservingGuest(Guest $guest): void{
        $this->attributes['reserving_guest'] = (array)$guest;
    }

    public function getGuests(): array{
    }

    public function setGuests(array $guests): bool{
    }

    public function addGuest(Guest $guest): void{
    }

    public function getHasBreakfast(): bool{
        return $this->attributes['has_breakfast'];
    }

    public function setHasBreakfast(bool $hasBreakfast): bool{
        $this->attributes['has_breakfast'] = $hasBreakfast;
    }

    public function getArrival(): string{
        return $this->attributes['arrival'];
    }

    public function setArrival(string $arrival){
        $this->attributes['arrival'] = $arrival;
    }

    public function getDeparture(): string{
        return $this->attributes['departure'];
    }

    public function setDeparture(string $departure){
        $this->attributes['departure'] = $departure;
    }

    public function getComment(): ?string{
        return $this->attributes['comment'];
    }

    public function setComment(?string $comment): void{
        $this->attributes['comment'] = $comment;
    }

    public function calculateNights(): int{

        $this->attributes['date_end'] - $this->attributes['date_start'];

        $dateInterval = $this->dateStart->diff($dateEnd);

        return $dateInterval;


    }

    public function calculateDays(): int{
        return calculateNights() + 1;
    }

    //Gekoppeld aan room_id in de database
    public function room() : BelongsTo {
        return $this->belongsTo(Room::class);
    }

    public function setRoomId($id) {
        $this->attributes['room_id'] = $id;
    }

    public function guest(): BelongsToMany{
        return $this->belongsToMany(Guest::class);
    }

    /*public function addReservation(ReservationTask $reservation, int $roomid): void{
        $this->create([
            'room_id' => $roomid,
            'adults' => $reservation->getAdults(),
            'children' => $reservation->getChildren(),
            'room_type' => $reservation->getRoomType(),
            'room_view' => $reservation->getRoomView(),
            'baby_bed' => $reservation->getBabyBed(),
            'handicap' => $reservation->getHandicap(),
            'arrival' => $reservation->getArrival(),
            'departure' => $reservation->getDeparture(),
            'comment' => $reservation->getComment()
        ]);
    }*/
}
