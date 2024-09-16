<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;


Route::get('/', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');


Route::prefix('history')
    ->middleware(['auth', 'verified'])
    ->name('history.')
    ->controller(TrainingController::class)
    ->group(function(){
        Route::get('/', 'index')->name('index');
        Route::post('/show', 'show')->name('show');
});

Route::prefix('create')
    ->middleware(['auth', 'verified'])
    ->name('create.')
    ->controller(TrainingController::class)
    ->group(function(){
        Route::get('/', 'createIndex')->name('index');
        Route::post('/', 'store')->name('store');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
