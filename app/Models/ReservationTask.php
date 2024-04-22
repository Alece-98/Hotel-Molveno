<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Enums\RoomType;
use App\Enums\RoomView;
use DateTime;


class ReservationTask extends Task
{
    use HasFactory;

    //Table name for database
    private RoomType $roomType;
    private RoomView $roomView;
    private bool $isHandicapAccessible;
    private bool $hasBabyBed;
    private array $guestIDs;

    protected $table = 'reservations';

    protected $fillable = ['room_id', 'creator', 'reserving_guest', 'guests', 'uuid', 'has_breakfast', 'comments', 'adults', 'children', 'arrival', 'departure'];

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

    public function setHasBabyBed(bool $hasBabyBed){
        $this->attributes['baby_bed'] = $hasBabyBed;
    }

    public function getHandicap(): bool{
        return $this->attributes['handicap'];
    }

    public function setHandicap(bool $isHandicapAccessible){
        $this->attributes['handicap'] = $isHandicapAccessible;
    }

    public function getRoomType(): RoomType{

        return $this->roomType;
    }

    public function setRoomType(RoomType $roomType){
        $this->roomType = $roomType;
    }

    public function getRoomView(): RoomView{
        return $this->roomView;
    }

    public function setRoomView(RoomView $roomView){
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
        return (int)date_diff(
            DateTime::createFromFormat('Y-m-d', $this->attributes['departure']),
            DateTime::createFromFormat('Y-m-d', $this->attributes['arrival']))->format('%d');
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

    public function getRoomId(){
        return $this->attributes['room_id'];
    }

    public function guest(): BelongsToMany{
        return $this->belongsToMany(Guest::class, "guests_reservations");
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
