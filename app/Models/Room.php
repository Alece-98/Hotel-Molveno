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
    protected $table = 'room';
    
    protected $fillable = ['room_id', 'room_number', 'floor', 'room_view', 'room_type', 'handicap_accessible', 'baby_bed', 'price_per_night', 'room_capacity', 'bed_description', 'id'];


    // Room number
    public function getRoomID(): int{
       return  $this->attributes['id'];
    }

    public function getRoomNumber(): int {
        return $this->attributes['room_number'];
    }

    public function getFormattedRoomNumber(): string{
        $number = $this->attributes['room_number'];
        substr_replace($number, ".", 1);
        return $number;
    }

    public function setRoomNumber(int $roomNumber): void {
       //$this->roomNumber = $roomNumber;
       $this->attributes['room_number'] = $roomNumber;
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
        return RoomView::tryFrom($this->normalizeStringFromDatabase($this->attributes['room_view']));
    }

    public function setRoomView(string $roomView): void {
        $this->attributes['room_view'] = RoomView::tryFrom($roomView);
    }

    // Room type
    public function getRoomType(): RoomType {
        return RoomType::tryFrom($this->normalizeStringFromDatabase($this->attributes['room_type']));
    }

    public function setRoomType(string $roomType): void {
        $this->attributes['room_type'] = RoomType::tryFrom($roomType);
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
        return $this->attributes['room_capacity'];
    }

    public function setRoomCapacity(int $capacity): void{
        $this->attributes['room_capacity'] = $capacity;
    }
}

