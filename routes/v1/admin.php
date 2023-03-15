<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\Users\IndexController;
use App\Http\Controllers\Tickets\IndexTicketController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'clients',
    'as' => 'clients:',
], function () {
    Route::get('/', IndexController::class)->name('clients');
});

Route::group([
    'prefix' => 'tickets',
    'as' => 'tickets:',
], function () {
    Route::get('/', IndexTicketController::class)->name('tickets');
});
