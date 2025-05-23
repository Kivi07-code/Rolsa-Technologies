<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/market', function () {
    return view('market');
})->middleware(['auth', 'verified'])->name('market');

Route::get('/schedule', function () {
    return view('schedule');
})->middleware(['auth', 'verified'])->name('schedule');

Route::get('/lessons', function () {
    return view('lessons');
})->middleware(['auth', 'verified'])->name('lessons');

Route::get('/footprint', function () {
    return view('footprint');
})->middleware(['auth', 'verified'])->name('footprint');


Route::get('/locations', function () {
    return view('locations');
})->middleware(['auth', 'verified'])->name('locations');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
