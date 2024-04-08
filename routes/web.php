<?php



namespace App\Http\Controllers;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Dashboard');
});


Route::get('/MakeReservation', function () {
    return view('MakeReservation'); });

Route::get('/RoomOverview', function () {
    return view('RoomOverview');

});
// Route::get('/extraGuest', function () {
//     return view('extraGuest');
// });
// Route::post('/extraGuest', function () {
//     return view('extraGuest');
// });
Route::get('/extraGuest', [extraGuestController::class, 'show'])->name('extraGuest.show');

Route::post('/extraGuest', [extraGuestController::class, 'store'])->name('extraGuest.store');

Route::get('/MakeReservation', [MakeReservationController::class, 'show']);

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
});



require __DIR__.'/auth.php';


// Route voor het weergeven van het reserveringsformulier
Route::get('/reservation', function () {
    return view('reservation_form');
});

// Route voor het verwerken van de reserveringsaanvraag
Route::get('/calculate-reservation-cost', [ReservationController::class, 'calculateReservationCost']);
