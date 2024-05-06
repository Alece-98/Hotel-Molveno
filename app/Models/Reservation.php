<?php declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Enums\RoomType;
use App\Enums\RoomView;
use DateTime;
use Illuminate\Queue\SerializesModels;


class Reservation extends Model
{
    use HasFactory;
    use SerializesModels;

    //Table name for database
    private int $peopleLeftToReserve;
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

    public function getPeopleLeftToReserve(): int{
        return $this->peopleLeftToReserve;
    }

    public function setPeopleLeftToReserve(): void{
        $this->peopleLeftToReserve = $this->getAdults() + $this->getChildren();
    }

    public function decrementPeopleToReserve(): void{
        $this->peopleLeftToReserve -= 1;
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
        return $this->attributes['arrival'];
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

    public function getReservingGuest(): Guest{
        return $this->attributes['reserving_guest'];
    }

    public function setReservingGuest(Guest $guest): void{
        $this->attributes['reserving_guest'] = (array)$guest;
    }


    public function hasBreakfast(): bool{
        return $this->attributes['has_breakfast'];
    }

    public function setHasBreakfast(bool $hasBreakfast){
        $this->attributes['has_breakfast'] = $hasBreakfast;
    }

    public function getArrival(): Carbon{
        return Carbon::parse($this->attributes['arrival']);
    }

    public function setArrival(Carbon $arrival){
        $this->attributes['arrival'] = $arrival->toDateString();
    }

    public function getDeparture(): Carbon{
        return Carbon::parse($this->attributes['departure']);
    }

    public function setDeparture(Carbon $departure){
        $this->attributes['departure'] = $departure->toDateString();
    }

    public function getComment(): ?string{
        return $this->attributes['comment'];
    }

    public function setComment(?string $comment): void{
        $this->attributes['comment'] = $comment;
    }

    public function calculateNights(): int{
        $arrival = Carbon::parse($this->attributes['arrival']);
        $departure = Carbon::parse($this->attributes['departure']);
        return $arrival->diffInDays($departure);

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
  
    public function guests(): BelongsToMany{
        return $this->belongsToMany(Guest::class, "guests_reservations");
    }
}
