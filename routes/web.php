<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\RoundController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/users/{user}', 'show');
    Route::get('/users', 'index');
});

Route::controller(CourseController::class)->group(function () {
    Route::get('/courses/{course}', 'show');
    Route::get('/courses', 'index');
});

Route::controller(RoundController::class)->group(function () {
    Route::get('/rounds/{round}', 'show');
    Route::get('/rounds', 'index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
