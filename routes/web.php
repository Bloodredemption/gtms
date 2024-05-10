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

Route::get('/residents', function () {
    return view('admin.resident');
})->name('admin.residents');

Route::get('/drivers', function () {
    return view('admin.driver');
})->name('admin.drivers');

Route::get('/baranggay', function () {
    return view('admin.baranggay');
})->name('admin.brgy');

Route::get('/trucks', function () {
    return view('admin.truck');
})->name('admin.trucks');

Route::get('/complaints', function () {
    return view('admin.complaint');
})->name('admin.complaints');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
