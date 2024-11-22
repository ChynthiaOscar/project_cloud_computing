<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\MatchesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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
Route::get('/data', [MatchesController::class, 'index'])->name('data');

// Get Nationality Ajax
Route::post('/get-nationalities', [MatchesController::class, 'getNationalitiesBySport']);

// Get Dates Ajax
Route::post('/get-dates', [MatchesController::class, 'getDatesBySportAndNationality']);

/* END DRAW TICKET */
Route::get('/information', function () {
    return view('information');
})->name('information');

Route::get('/my_ticket', function () {
    return view('my_ticket');
})->name('my_ticket');

Route::get('/win', function () {
    return view('win');
})->name('win');

Route::get('/lose', function () {
    return view('lose');
})->name('lose');

Route::get('/seat', function () {
    return view('seat');
})->name('seat');

Route::get("/run-migration", function(){
    Artisan::call("optimize:clear");
    Artisan::call("migrate:refresh --seed");

    return "Migrations executed successfully.";
});