<?php

declare(strict_types=1);

namespace Database\Seeders;

;

use App\Models\AirJourney;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

final class AirJourneysSeeder extends Seeder {
    public function run(): void {
        Schema::disableForeignKeyConstraints();
        DB::table('air_journeys')->truncate();
        Schema::enableForeignKeyConstraints();

        $airJourneys = [
            [
                'departure' => 'Manchester',
                'destination' => 'London',
                'dayOfWeek' => 'Monday',
                'price' => 10,
                'journeyTime' => 1,
                'startTime' => Carbon::now()->addHours(2)->toTimeString()
            ],
            [
                'departure' => 'Manchester',
                'destination' => 'Birmingham',
                'dayOfWeek' => 'Monday',
                'price' => 25,
                'journeyTime' => 0.5,
                'startTime' => Carbon::now()->addHours(4)->toTimeString()
            ],
            [
                'departure' => 'Edinburgh',
                'destination' => 'Manchester',
                'dayOfWeek' => 'Tuesday',
                'price' => 50,
                'journeyTime' => 1.5,
                'startTime' => Carbon::now()->addHours(5)->toTimeString()
            ],
            [
                'departure' => 'London',
                'destination' => 'Birmingham',
                'dayOfWeek' => 'Wednesday',
                'price' => 30,
                'journeyTime' => 1,
                'startTime' => Carbon::now()->addHours(6)->toTimeString()
            ],
            [
                'departure' => 'Birmingham',
                'destination' => 'Manchester',
                'dayOfWeek' => 'Wednesday',
                'price' => 20,
                'journeyTime' => 0.5,
                'startTime' => Carbon::now()->addHours(7)->toTimeString()
            ],
            [
                'departure' => 'Birmingham',
                'destination' => 'London',
                'dayOfWeek' => 'Wednesday',
                'price' => 30,
                'journeyTime' => 1,
                'startTime' => Carbon::now()->addHours(8)->toTimeString()
            ],
            [
                'departure' => 'Bristol',
                'destination' => 'London',
                'dayOfWeek' => 'Wednesday',
                'price' => 20,
                'journeyTime' => 0.5,
                'startTime' => Carbon::now()->addHours(9)->toTimeString()
            ],
            [
                'departure' => 'Bristol',
                'destination' => 'Manchester',
                'dayOfWeek' => 'Wednesday',
                'price' => 25,
                'journeyTime' => 1,
                'startTime' => Carbon::now()->addHours(10)->toTimeString()
            ],
            [
                'departure' => 'Glasgow',
                'destination' => 'Birmingham',
                'dayOfWeek' => 'Friday',
                'price' => 60,
                'journeyTime' => 1.5,
                'startTime' => Carbon::now()->addHours(11)->toTimeString()
            ]
        ];

        collect($airJourneys)->each(function ($airJourney) {
            AirJourney::create($airJourney);
        });
    }
}
