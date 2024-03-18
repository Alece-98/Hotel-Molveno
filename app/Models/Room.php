<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\RoomType;
use App\Enums\RoomView;
use App\Models\ReservationTask;
use Illuminate\Database\Eloquent\Relations;


class Room extends Model
{
    use HasFactory;


    //Table name for database
    protected $table = 'rooms';
    
    protected $fillable = ['room_id', 'number', 'floor', 'view', 'type', 'handicap_accessible', 'baby_bed', 'price_per_night'];

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
        return $this->attributes['number'];
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
    */

    public function getBeds(){
        return $this->attributes['beds'];
    }

    public function setBeds(string $beds){
        $this->attributes['beds'] = $beds;
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
        return RoomView::tryFrom($this->attributes['view']);
    }

    public function setRoomView(string $roomView): void {
        $this->attributes['view'] = RoomView::tryFrom($roomView);
    }

    // Room type
    public function getRoomType(): RoomType {
        return RoomType::tryFrom($this->attributes['type']);
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

    public function hasHandicapFacility(): bool {
        return $this->hasHandicapFacility;
    }

    public function setHasHandicapFacility(bool $hasHandicapFacility): void {
        $this->hasHandicapFacility = $hasHandicapFacility;

    }

    // Baby bed option

    public function hasBabyBed(): bool {

    public function hasBabyBedOption(): bool {


        return $this->attributes['baby_bed'];
    }

    public function setHasBabyBed(bool $hasBabyBedOption): void {
        $this->attributes['baby_bed'] = $hasBabyBedOption;

        return $this->hasBabyBedOption;
    }

    public function setHasBabyBedOption(bool $hasBabyBedOption): void {
        $this->hasBabyBedOption = $hasBabyBedOption;

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
    }

    // Single beds
    public function getSingleBeds(): int {
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
    public function hasBabyBedOption(): bool {
        return $this->attributes['baby_bed'];
    }

    public function setHasBabyBedOption(bool $hasBabyBedOption): void {
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
    public function getReservations(): array {
        return [];
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
    }
}

