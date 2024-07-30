<?php

use App\Http\Controllers\AdoptedPetController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
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

// Test Database if it's working
Route::get('/db-test', function () {
    try {
        DB::connection()->getPdo();
        return 'Database connection is working!';
    } catch (\Exception $e) {
        return 'Could not connect to the database. Please check your configuration. Error: ' . $e->getMessage();
    }
});

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [UserController::class, 'register'])->name('register.submit');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('/about', function () {
    return view('about');
});

Route::get('/appointment', [AppointmentController::class, 'show'])->middleware('auth')->name('appointment');
Route::post('/appointment', [AppointmentController::class, 'store'])->middleware('auth')->name('appointment.store');

// Route::get('/adopt', function () {
//     return view('adopt');
// })->name('adopt.show');

Route::get('/adopt', [AdoptedPetController::class, 'index']);
Route::get('/adopt/{id}', [AdoptedPetController::class, 'show']);

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/dbconn', function () {
    return view('dbconn');
})->name('dbconn.show');

Route::get('/volunteer', function () {
    return view('volunteer');
});

Route::get('/contact', function () {
    return view('contact');
});


