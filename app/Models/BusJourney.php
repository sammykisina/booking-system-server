<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusJourney extends Model {
    use HasFactory;

    protected $fillable = [
        'departure',
        'destination',
        'dayOfWeek',
        'price',
        'journeyTime',
        'startTime'
    ];
}
