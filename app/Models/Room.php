<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\RoomType;
use App\Enums\RoomView;

class Room extends Model
{
    use HasFactory;

    private int $roomNumber;
    private int $singleBeds;
    private int $twinBeds;
    private int $floor; #Moet dit een int zijn?
    private RoomView $roomView;
    private RoomType $roomType;
    private bool $hasHandicapFacility;
    private bool $hasBabyBedOption;
    private array $cleaningTasks;
    private array $maintenanceTasks;
    private array $bookingTasks;
    private array $reservations;
    private int $price;


}
