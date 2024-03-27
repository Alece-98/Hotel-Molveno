<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\RoomType;
use App\Enums\RoomView;
use App\Models\ReservationTask;
use App\Traits\DatabaseStringNormalization;
use Illuminate\Database\Eloquent\Relations;



class Room extends Model
{
    use HasFactory;
    use DatabaseStringNormalization;

    //Table name for database
    protected $table = 'rooms';
    
    protected $fillable = ['room_id', 'number', 'floor', 'view', 'type', 'handicap_accessible', 'baby_bed', 'price_per_night', 'capacity', 'bed_description', 'id'];

    public function __construct(){
        #UUID komt hier
    }

    // Room number
    public function getRoomID(): int{
        $this->attributes['id'];
    }
    public function getRoomNumber(): int {
        return $this->attributes['number'];
    }

    public function getFormattedRoomNumber(): string{
        $number = $this->attributes['number'];
        substr_replace($number, ".", 1);
    }

    public function setRoomNumber(int $roomNumber): void {
       //$this->roomNumber = $roomNumber;
       $this->attributes['number'] = $roomNumber;
    }

    public function reservation() : HasMany {
        $this->hasMany(ReservationTask::class);
    }

    public function getBeds(){
        return $this->attributes['bed_description'];
    }

    public function setBeds(string $beds){
        $this->attributes['bed_description'] = $beds;
    }

    // Floor
    public function getFloor(): int {
        return $this->attributes['floor'];
    }

    public function setFloor(int $floor): void {
        $this->attributes['floor'] = $floor;
    }

    // Room view
    public function getRoomView(): RoomView {
        return RoomView::tryFrom($this->normalizeStringFromDatabase($this->attributes['view']));
    }

    public function setRoomView(string $roomView): void {
        $this->attributes['view'] = RoomView::tryFrom($roomView);
    }

    // Room type
    public function getRoomType(): RoomType {
        return RoomType::tryFrom($this->normalizeStringFromDatabase($this->attributes['type']));
    }

    public function setRoomType(string $roomType): void {
        $this->attributes['type'] = RoomType::tryFrom($roomType);
    }

    // Handicap facility
    public function isHandicapAccessible(): bool {
        return $this->attributes['handicap_accessible'];
    }

    public function setHandicapAccessible(bool $isHandicapAccessible): void {
        $this->attributes['handicap_accessible'] = $isHandicapAccessible;
    }

    // Baby bed option
    public function hasBabyBed(): bool {
        return $this->attributes['baby_bed'];
    }

    public function setHasBabyBed(bool $hasBabyBedOption): void {
        $this->attributes['baby_bed'] = $hasBabyBedOption;
    }

    // Cleaning tasks
    public function getCleaningTasks(): array {
    }

    public function setCleaningTasks(array $cleaningTasks): void {
    }

    // Maintenance tasks
    public function getMaintenanceTasks(): array {
    }

    public function setMaintenanceTasks(array $maintenanceTasks): void {
    }

    // Booking tasks
    public function getBookingTasks(): array {
    }

    public function setBookingTasks(array $bookingTasks): void {
    }

    // Reservations
    public function getReservations(): HasMany {
        return $this->hasMany(ReservationTask::class);
    }

    // Price
    public function getPricePerNight(): int {
        return $this->attributes['price_per_night'];
    }

    public function setPricePerNight(int $price): void {
        $this->attributes['price_per_night'] = $price;
    }

    public function getRoomCapacity(): int{
        return $this->attributes['capacity'];
    }

    public function setRoomCapacity(int $capacity): void{
        $this->attributes['capacity'] = $capacity;
    }
}

