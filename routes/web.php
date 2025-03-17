<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/Bookspace', function () {
    return view('bookspace');
})->middleware(['auth', 'verified'])->name('bookspace');

Route::get('/order', function () {
    return view('order');
})->middleware(['auth', 'verified'])->name('order');

Route::get('/lessons', function () {
    return view('lessons');
})->middleware(['auth', 'verified'])->name('lessons');

Route::get('/hampers', function () {
    return view('hampers');
})->middleware(['auth', 'verified'])->name('hampers');


Route::get('/locatio s', function () {
    return view('locations');
})->middleware(['auth', 'verified'])->name('locations');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
