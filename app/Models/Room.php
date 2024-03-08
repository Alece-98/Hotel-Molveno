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
    public function hasHandicapFacility(): bool {
        return $this->hasHandicapFacility;
    }

    public function setHasHandicapFacility(bool $hasHandicapFacility): void {
        $this->hasHandicapFacility = $hasHandicapFacility;
    }

    // Baby bed option
    public function hasBabyBedOption(): bool {
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
        return $this->reservations;
    }

    public function setReservations(array $reservations): void {
        $this->reservations = $reservations;
    }

    public function addReservation(ReservationTask $reservation): void{
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

