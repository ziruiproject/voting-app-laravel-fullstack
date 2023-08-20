<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VotesController;

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

Route::get('/vote', [VotesController::class, 'index'])->middleware(['auth', 'valid']);
Route::post('/vote', [VotesController::class, 'vote'])->middleware(['auth', 'valid']);
Route::get('/logout', [UserController::class, 'logout'])->middleware(['auth']);
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/login', function () {
    return view('login');
});

Route::get('/done', function () {
    return view('done');
})->middleware('auth');
