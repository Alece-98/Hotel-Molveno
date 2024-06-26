<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeeReservationController;
use App\Http\Controllers\RoomInfoController;
use App\Http\Controllers\AddGuestController;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });










Route::get('/RoomOverview', [RoomController::class, 'show']);

Route::get('/selectReservationRoom', [SelectReservationRoomController::class, 'show'])->name('SelectReservationRoom');

Route::get('/MakeReservation', [MakeReservationController::class, 'show']);

// Route::get('/extraGuest', function () {
//     return view('extraGuest');
// });
// Route::post('/extraGuest', function () {
//     return view('extraGuest');
// });
Route::get('/extraGuest', [extraGuestController::class, 'show'])->name('extraGuest.show');

Route::post('/extraGuest',[extraGuestController::class, 'store'])->name('extraGuest.store');

Route::get('/addGuest',[AddGuestController::class, 'show',])->name('AddGuest');

Route::post('/addGuest', [AddGuestController::class, 'store']);

Route::get('/selectReservationRoom', [SelectReservationRoomController::class, 'show'])->name('SelectReservationRoom');

Route::post('/selectReservationRoom', [SelectReservationRoomController::class, function (Request $request) {
    $controller = new SelectReservationRoomController();
    $controller->handleNavigationButtons("room-form", $request);
}]);

Route::get('/MakeReservation', [MakeReservationController::class, 'show'])->name('MakeReservation');

Route::post('/MakeReservation', [MakeReservationController::class, 'store']);

Route::get('/availablerooms', [AvailableRoomsController::class, 'show']);

Route::post('/availablerooms', [AvailableRoomsController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [SeeReservationController::class, 'showAllReservations']);
Route::get('/SeeReservations', [SeeReservationController::class, 'showAllReservations']);
});

require __DIR__.'/auth.php';

// Route voor het weergeven van het reserveringsformulier
Route::get('/reservation', function () {
    return view('reservation_form');
});


Route::get('/room/{room}', [RoomInfoController::class, 'show'])->name('rooms.show');

Route::post('/verwijderReservering/{id}', [VerwijderReserveringController::class, 'old'])->name('VerwijderReservering.post');

Route::post('/CheckIn/{id}', [CheckInController::class, 'checkIn'])->name('CheckIn.post');

Route::get('/SingleReservation/{id}', [ReservationInfoController::class, 'show']);
// Route::post('/SingleReservation/{id}', [ReservationInfoController::class, 'post']);

