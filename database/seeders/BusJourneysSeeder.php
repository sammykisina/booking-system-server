<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\BusJourney;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

final class BusJourneysSeeder extends Seeder {
    public function run(): void {
        Schema::disableForeignKeyConstraints();
        DB::table('bus_journeys')->truncate();
        Schema::enableForeignKeyConstraints();

        $busJourneys = [
            [
                'departure' => 'Manchester',
                'destination' => 'London',
                'dayOfWeek' => 'Monday',
                'price' => 10,
                'journeyTime' => 4,
                'startTime' => Carbon::now()->addHours(2)->toTimeString()
            ],
            [
                'departure' => 'Manchester',
                'destination' => 'Birmingham',
                'dayOfWeek' => 'Monday',
                'price' => 6,
                'journeyTime' => 5,
                'startTime' => Carbon::now()->addHours(4)->toTimeString()
            ],
            [
                'departure' => 'Edinburgh',
                'destination' => 'Manchester',
                'dayOfWeek' => 'Monday',
                'price' => 8,
                'journeyTime' => 4,
                'startTime' => Carbon::now()->addHours(5)->toTimeString()
            ],
            [
                'departure' => 'Edinburgh',
                'destination' => 'London',
                'dayOfWeek' => 'Tuesday',
                'price' => 8,
                'journeyTime' => 4,
                'startTime' => Carbon::now()->addHours(6)->toTimeString()
            ],
            [
                'departure' => 'London',
                'destination' => 'Newcastle',
                'dayOfWeek' => 'Tuesday',
                'price' => 6,
                'journeyTime' => 4,
                'startTime' => Carbon::now()->addHours(7)->toTimeString()
            ],
            [
                'departure' => 'London',
                'destination' => 'Birmingham',
                'dayOfWeek' => 'Tuesday',
                'price' => 10,
                'journeyTime' => 6,
                'startTime' => Carbon::now()->addHours(8)->toTimeString()
            ],
            [
                'departure' => 'Birmingham',
                'destination' => 'London',
                'dayOfWeek' => 'Wednesday',
                'price' => 8,
                'journeyTime' => 3,
                'startTime' => Carbon::now()->addHours(9)->toTimeString()
            ],
            [
                'departure' => 'Birmingham',
                'destination' => 'Manchester',
                'dayOfWeek' => 'Wednesday',
                'price' => 10,
                'journeyTime' => 4,
                'startTime' => Carbon::now()->addHours(10)->toTimeString()
            ],
            [
                'departure' => 'Bristol',
                'destination' => 'Glasgow',
                'dayOfWeek' => 'Thursday',
                'price' => 12,
                'journeyTime' => 5,
                'startTime' => Carbon::now()->addHours(11)->toTimeString()
            ],
            [
                'departure' => 'Bristol',
                'destination' => 'Cardiff',
                'dayOfWeek' => 'Thursday',
                'price' => 14,
                'journeyTime' => 3,
                'startTime' => Carbon::now()->addHours(12)->toTimeString()
            ],
            [
                'departure' => 'Newcastle',
                'destination' => 'Cardiff',
                'dayOfWeek' => 'Friday',
                'price' => 12,
                'journeyTime' => 4,
                'startTime' => Carbon::now()->addHours(13)->toTimeString()
            ],
            [
                'departure' => 'Newcastle',
                'destination' => 'London',
                'dayOfWeek' => 'Friday',
                'price' => 12,
                'journeyTime' => 5,
                'startTime' => Carbon::now()->addHours(14)->toTimeString()
            ],
            [
                'departure' => 'Cardiff',
                'destination' => 'Birmingham',
                'dayOfWeek' => 'Friday',
                'price' => 10,
                'journeyTime' => 6,
                'startTime' => Carbon::now()->addHours(15)->toTimeString()
            ],
            [
                'departure' => 'Cardiff',
                'destination' => 'Glasgow',
                'dayOfWeek' => 'Saturday',
                'price' => 12,
                'journeyTime' => 4,
                'startTime' => Carbon::now()->addHours(16)->toTimeString()
            ],
            [
                'departure' => 'Glasgow',
                'destination' => 'Manchester',
                'dayOfWeek' => 'Saturday',
                'price' => 18,
                'journeyTime' => 4,
                'startTime' => Carbon::now()->addHours(17)->toTimeString()
            ],
            [
                'departure' => 'Glasgow',
                'destination' => 'London',
                'dayOfWeek' => 'Sunday',
                'price' => 22,
                'journeyTime' => 3,
                'startTime' => Carbon::now()->addHours(18)->toTimeString()
            ]
        ];

        collect($busJourneys)->each(function ($busJourney) {
            BusJourney::create($busJourney);
        });
    }
}
