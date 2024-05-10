<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');

Route::resource('users', UsersController::class)->middleware('auth');
Route::put('users/{user}/update-password', [UsersController::class, 'updatePass'])->name('users.updatePass');

Route::get('/drivers', function () {
    return view('admin.driver_records.index');
})->name('admin.drivers');

Route::get('/baranggays', function () {
    return view('admin.barangay_records.index');
})->name('admin.baranggay');

Route::get('/trucks', function () {
    return view('admin.truck_records.index');
})->name('admin.trucks');

Route::get('/schedules', function () {
    return view('admin.truck_schedule.index');
})->name('admin.schedules');

Route::get('/complaints', function () {
    return view('admin.complaints.index');
})->name('admin.complaints');

Route::get('/announcements', function () {
    return view('admin.announcements.index');
})->name('admin.announcements');

Route::get('/sms', function () {
    return view('admin.sms.index');
})->name('admin.sms');

Route::get('/routes', function () {
    return view('admin.routes.index');
})->name('admin.routes');

Route::get('/routes/view', function () {
    return view('admin.routes.view');
})->name('admin.routes.view');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
