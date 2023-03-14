<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/**
 * auth routes
 */
Route::prefix('auth')->as('auth:')->group(
    base_path('routes/v1/auth.php')
);

/**
 * admin routes
 */
Route::prefix('admin')
    ->as('admin:')
    ->middleware(['auth:sanctum', 'ability:admin'])
    ->group(
        base_path('routes/v1/admin.php')
    );

/**
 * authenticated users routes
 */
Route::prefix('users')
    ->as('users:')
    ->middleware(['auth:sanctum'])
    ->group(
        base_path('routes/v1/authenticated.php')
    );
