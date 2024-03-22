<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\RoomType;
use App\Enums\RoomView;
use App\Models\ReservationTask;


class Room extends Model
{
    use HasFactory;

    //Table name for database
    protected $table = 'rooms';

    
    protected $fillable = ['room_id', 'number', 'floor', 'view', 'type', 'handicap_accessible', 'baby_bed', 'price_per_night', 'capacity', 'bed_description'];


    public function __construct(){
        #UUID komt hier
    }

    // Room number
    public function getRoomNumber(): int {
        return $this->attributes['room_number'];
    }

    public function setRoomNumber(int $roomNumber): void {
       //$this->roomNumber = $roomNumber;

       $this->attributes['number'] = $roomNumber;
    }

    public function reservation() : HasMany {
        $this->hasMany(ReservationTask::class);
    }

    // Single beds
    /*public function getSingleBeds(): int {

    }

    public function setSingleBeds(int $singleBeds): void {
        $this->singleBeds = $singleBeds;
    }

    // Twin beds
    public function getTwinBeds(): int {
        return $this->twinBeds;
    }

    public function setTwinBeds(int $twinBeds): void {
        $this->twinBeds = $twinBeds;
    }

    */

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
        return $this->roomView;
    }

    public function setRoomView(string $roomView): void {
        $this->roomView = RoomView::tryFrom($roomView);
    }

    // Room type
    public function getRoomType(): RoomType {
        return $this->roomType;
    }

    public function setRoomType(string $roomType): void {
        $this->roomType = RoomType::tryFrom($roomType);
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
        return $this->cleaningTasks;
    }

    public function setCleaningTasks(array $cleaningTasks): void {
        $this->cleaningTasks = $cleaningTasks;
    }

    // Maintenance tasks
    public function getMaintenanceTasks(): array {
        return $this->maintenanceTasks;
    }

    public function setMaintenanceTasks(array $maintenanceTasks): void {
        $this->maintenanceTasks = $maintenanceTasks;
    }

    // Booking tasks
    public function getBookingTasks(): array {
        return $this->bookingTasks;
    }

    public function setBookingTasks(array $bookingTasks): void {
        $this->bookingTasks = $bookingTasks;
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


