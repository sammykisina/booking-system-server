<?php

declare(strict_types=1);

use App\Http\Controllers\Travels\IndexAirTravelsController;
use App\Http\Controllers\Travels\IndexBusTravelsController;
use App\Http\Controllers\Travels\IndexTrainTravelsController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'busJourney',
    'as' => 'busJourney:',
], function () {
    Route::get('/', IndexBusTravelsController::class)->name('busJourney');
});

Route::group([
    'prefix' => 'trainJourney',
    'as' => 'trainJourney:',
], function () {
    Route::get('/', IndexTrainTravelsController::class)->name('trainJourney');
});

Route::group([
    'prefix' => 'airJourney',
    'as' => 'airJourney:',
], function () {
    Route::get('/', IndexAirTravelsController::class)->name('airJourney');
});
