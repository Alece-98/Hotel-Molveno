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

    private int $roomNumber = 0;
    private int $singleBeds = 0;
    private int $twinBeds = 0;
    private int $floor = 0; #Moet dit een int zijn?
    private RoomView $roomView = RoomView::Standard;
    private RoomType $roomType = RoomType::Standard;
    private bool $hasHandicapFacility = false;
    private bool $hasBabyBedOption = false;
    private array $cleaningTasks = [];
    private array $maintenanceTasks = [];
    private array $bookingTasks = [];
    private array $reservations = [];
    private int $price = 0;
    private string $uuid;


    public function __construct(){
        #UUID komt hier
    }


    // Room number
    public function getRoomNumber(): int {
        return $this->attributes['room_number'];
    }

    public function setRoomNumber(int $roomNumber): void {
       //$this->roomNumber = $roomNumber;
       $this->attributes['room_number'] = $roomNumber;

        // Room number
    public function getRoomNumber(): int {
        return $this->roomNumber;
    }

    public function setRoomNumber(int $roomNumber): void {
        $this->roomNumber = $roomNumber;

    }

    // Single beds
    public function getSingleBeds(): int {

        return $this->singleBeds;

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

    // Floor
    public function getFloor(): int {

        return $this->attributes['floor'];
    }

    public function setFloor(int $floor): void {
        $this->attributes['floor'] = $floor;

        return $this->floor;
    }

    public function setFloor(int $floor): void {
        $this->floor = $floor;

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

    public function hasHandicapFacility(): bool {
        return $this->hasHandicapFacility;
    }

    public function setHasHandicapFacility(bool $hasHandicapFacility): void {
        $this->hasHandicapFacility = $hasHandicapFacility;

    }

    // Baby bed option
    public function hasBabyBedOption(): bool {

        return $this->attributes['baby_bed'];
    }

    public function setHasBabyBedOption(bool $hasBabyBedOption): void {
        $this->attributes['baby_bed'] = $hasBabyBedOption;

        return $this->hasBabyBedOption;
    }

    public function setHasBabyBedOption(bool $hasBabyBedOption): void {
        $this->hasBabyBedOption = $hasBabyBedOption;

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
    public function getReservations(): array {

        return [];

        return $this->reservations;

    }

    public function setReservations(array $reservations): void {
        $this->reservations = $reservations;
    }

    public function addReservation(ReservationTask $reservation): void{

    }

    // Price
    public function getPricePerNight(): int {
        return $this->attributes['price_per_night'];
    }

    public function setPricePerNight(int $price): void {
        $this->attributes['price_per_night'] = $price;

        array_push($this->reservations, $reservation);
    }

    // Price
    public function getPrice(): int {
        return $this->price;
    }

    public function setPrice(int $price): void {
        $this->price = $price;

    }
}

