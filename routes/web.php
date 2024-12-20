<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DrawController;
use App\Http\Controllers\MatchesController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\TicketsDetailController;

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

/* MAIN PAGE */

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
/* END MAIN PAGE */

/* AUTHENTICATIONS */
// Login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Logging In
Route::get('/logging_in', [AccountController::class, 'login'])->name('logging_in');


// Register
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

// Create Account
Route::post('/create', [AccountController::class, 'create'])->name('create');
/* END AUTHENTICATIONS */

/* DRAW TICKET */
// Draw Ticket Form
Route::get('/data', [MatchesController::class, 'index'])->name('data')->middleware('auth:account');

// Get Nationality Ajax
Route::post('/get-nationalities', action: [MatchesController::class, 'getNationalitiesBySport']);

// Get Types Ajax
Route::post('/get-types', [MatchesController::class, 'getTypeBySportAndNationality']);

// Get Ticket Price
Route::post('/get-price', [MatchesController::class, 'getTicketPrice']);

// Save Ticket
Route::post('/save-ticket', [TicketsDetailController::class, 'saveTickets'])->name('saveTickets');

/* END DRAW TICKET */

/* PAYMENT */
// Payment Form
Route::put('/payment/{id}', [PackagesController::class, 'payment'])->name('payment')->middleware('auth:account');
/* END PAYMENT */

Route::get('/information', function () {
    return view('information');
})->name('information')->middleware('auth:account');

Route::get('/my_ticket', function () {
    return view('my_ticket');
})->name('my_ticket')->middleware('auth:account');

Route::get('/win', function () {
    return view('win');
})->name('win')->middleware('auth:account');;

Route::get('/lose', function () {
    return view('lose');
})->name('lose')->middleware('auth:account');

Route::get('/seat/{id}', [PackagesController::class, 'index'])->name('seat');

Route::get('/about_me/{id}', [AccountController::class, 'about'])->name('about_me');
Route::get('/match', function () {
    return view('match');
})->name('match');

Route::put('/save_about_me/{id}', [AccountController::class, 'update'])->name('about');

Route::get('/show_winners', function () {
    return view('show_winners');
});


// for draw ticket API
Route::post('/api/save-winner', [DrawController::class, 'saveWinners']);

// for schdule filter ajax
Route::get('/filter-matches', [MatchesController::class, 'filterMatches']);

