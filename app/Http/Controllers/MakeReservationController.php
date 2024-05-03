<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReservationTask;
use App\Models\Room;
use App\Enums\RoomType;
use App\Enums\RoomView;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;

class MakeReservationController extends Controller
{
    private $reservation;

    public function construct(){
        $this->middleware(function ($request, $next) {
            $this->reservation = session('reservation');
            return $next($request);
        });
    }

    public function show(){
        return view('MakeReservation', [$reservation = $this->reservation]);
    }

    public function store(Request $request){
        $reservation = new ReservationTask();
        $room = new Room();

        $this->validate($request, [
            'adults' => 'required|integer|gte:0',
            'children' => 'required|integer|gte:0',
            'arrival' => 'required|date|after_or_equal:today',
            'departure' => 'required|date|after:arrival|after:today',
            'comment' => 'string|max:2047|nullable',
            'roomtype' => [new Enum(RoomType::class)],
            'roomview' => [new Enum(RoomView::class)],
            'handicap' => 'boolean',
            'babybed' => 'boolean',
            'breakfast' => 'boolean',
        ], [
            'adults.required' => 'The amount of adults must be specified!',
            'adults.integer' => 'The amount of adults must be a number!',
            'adults.gte:0' => 'The amount of adults must be at least 0!',
            'children.required' => 'The amount of children must be specified!',
            'children.integer' => 'The amount of children must be a number!',
            'children.gte:0' => 'The amount of children must be at least 0!',
            'arrival.required' => 'The arrival date must be specified!',
            'arrival.date' => 'The arrival date must be a date!',
            'arrival.after_or_equal:today' => 'The arrival date has already passed!',
            'departure.required' => 'This departure date must be specified!',
            'departure.date' => 'The departure date must be a date!',
            'departure.after:arrival' => 'The departure date must be after the arrival date!',
            'departure.after:today' => 'The departure date has already passed!',
            'comment.string' => 'The comment must be a string!',
            'comment.max:2047' => 'The comment can not be this long - must be below 2048 characters',
            'handicap.boolean' => 'The handicap accessible value must be a boolean!',
            'babybed.boolean' => 'The babybed option must be a boolean!',
        ]);
        //Deze worden uiteindelijk wel opgeslagen
        $reservation->setAdults(request('adults'));
        $reservation->setChildren(request('children'));
        $reservation->setArrival(Carbon::parse(request('arrival')));
        $reservation->setDeparture(Carbon::parse(request('departure')));
        $reservation->setComment(request('comment'));
        //Deze zijn alleen voor het invullen, en worden niet opgeslagen!
        $reservation->setRoomType(RoomType::tryFrom(request('roomtype')));
        $reservation->setRoomView(RoomView::tryFrom(request('roomview')));
        $reservation->setHandicap($request->has('handicap'));
        $reservation->setHasBabyBed($request->has('babybed'));
        $reservation->setHasBreakfast($request->has('breakfast'));
        //Deze zijn tijdelijk
        $reservation->save();

        $rooms = $this->findAppropriateRooms(
            $reservation->getAmountOfPeople(),
            $reservation->getArrival(),
            $reservation->getDeparture(),
            $reservation->getRoomType(),
            $reservation->getRoomView(),
            $reservation->hasBabyBed(),
            $reservation->getHandicap()
        );

        session()->put('reservation', $reservation);
        session()->put('rooms', $rooms);
        session()->put('inputData', $request->all());

        return redirect()->route('SelectReservationRoom')->send();
    }

    private function findAppropriateRooms(int $capacity, Carbon $arrivalDate, Carbon $departureDate, RoomType $roomType, RoomView $roomView, bool $babyBed, bool $handicapAccessible): Collection{
        $rooms = Room::where([
            ['capacity', '>=', $capacity],
            ['type', $roomType],
            ['view', $roomView],
        ])->when($babyBed, function (Builder $query, string $role){
            $query->where('baby_bed', true);
        })->when($handicapAccessible, function (Builder $query, string $role){
            $query->where('handicap_accessible', true);
        })->get();

        $appropriateRooms = $rooms->reject(function ($room) use ($arrivalDate, $departureDate){
            return !($this->isRoomAvailableWithinDates($room->getRoomID(), $arrivalDate, $departureDate));
        });

        return $appropriateRooms;

    }

    public function getAllReservationsWithRoomID($roomID){
        return ReservationTask::where('room_id', $roomID)->get();
    }

    public function isRoomAvailableWithinDates($roomId, $arrival, $departure){
        $reservations = $this->getAllReservationsWithRoomID($roomId);
        $arrival = Carbon::parse($arrival);
        $departure = Carbon::parse($departure);

        foreach ($reservations as $reservation) {
           if ($this->doDatesOverlap($arrival, $departure, $reservation->getArrival(), $reservation->getDeparture())){
                return false;
           }
        }
        return true;
    }

    private function doDatesOverlap($reservationArrival, $reservationDeparture, $checkedDateArrival, $checkedDateDeparture): bool{
        if ($reservationArrival->lessThanOrEqualTo($checkedDateDeparture) && $reservationArrival->greaterThanOrEqualTo($checkedDateArrival) ||
        $reservationDeparture->lessThanOrEqualTo($checkedDateDeparture) && $reservationDeparture->greaterThanOrEqualTo($checkedDateArrival) ||
        $reservationArrival->lessThanOrEqualTo($checkedDateArrival) && $reservationDeparture->greaterThanOrEqualTo($checkedDateDeparture)){
            return true;
        }
        else{
            return false;
        }
    }
}
