<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\TrainJourney;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

final class TrainJourneysSeeder extends Seeder {
    public function run(): void {
        Schema::disableForeignKeyConstraints();
        DB::table('train_journeys')->truncate();
        Schema::enableForeignKeyConstraints();

        $trainJourneys = [
            [
                'departure' => 'Manchester',
                'destination' => 'London',
                'dayOfWeek' => 'Monday',
                'price' => 16,
                'journeyTime' => 2,
                'startTime' => Carbon::now()->addHours(2)->toTimeString()
            ],
            [
                'departure' => 'Manchester',
                'destination' => 'Birmingham',
                'dayOfWeek' => 'Monday',
                'price' => 18,
                'journeyTime' => 3,
                'startTime' => Carbon::now()->addHours(4)->toTimeString()
            ],
            [
                'departure' => 'Edinburgh',
                'destination' => 'Glasgow',
                'dayOfWeek' => 'Tuesday',
                'price' => 16,
                'journeyTime' => 4,
                'startTime' => Carbon::now()->addHours(5)->toTimeString()
            ],
            [
                'departure' => 'Edinburgh',
                'destination' => 'Manchester',
                'dayOfWeek' => 'Tuesday',
                'price' => 16,
                'journeyTime' => 3,
                'startTime' => Carbon::now()->addHours(6)->toTimeString()
            ],
            [
                'departure' => 'London',
                'destination' => 'Birmingham',
                'dayOfWeek' => 'Wednesday',
                'price' => 30,
                'journeyTime' => 3,
                'startTime' => Carbon::now()->addHours(7)->toTimeString()
            ],
            [
                'departure' => 'London',
                'destination' => 'Newcastle',
                'dayOfWeek' => 'Wednesday',
                'price' => 32,
                'journeyTime' => 3,
                'startTime' => Carbon::now()->addHours(8)->toTimeString()
            ],
            [
                'departure' => 'Birmingham',
                'destination' => 'Manchester',
                'dayOfWeek' => 'Wednesday',
                'price' => 18,
                'journeyTime' => 3,
                'startTime' => Carbon::now()->addHours(9)->toTimeString()
            ],
            [
                'departure' => 'Birmingham',
                'destination' => 'London',
                'dayOfWeek' => 'Wednesday',
                'price' => 18,
                'journeyTime' => 4,
                'startTime' => Carbon::now()->addHours(10)->toTimeString()
            ],
            [
                'departure' => 'Bristol',
                'destination' => 'London',
                'dayOfWeek' => 'Wednesday',
                'price' => 22,
                'journeyTime' => 3,
                'startTime' => Carbon::now()->addHours(11)->toTimeString()
            ],
            [
                'departure' => 'Bristol',
                'destination' => 'Manchester',
                'dayOfWeek' => 'Wednesday',
                'price' => 20,
                'journeyTime' => 3,
                'startTime' => Carbon::now()->addHours(12)->toTimeString()
            ],
            [
                'departure' => 'Newcastle',
                'destination' => 'Glasgow',
                'dayOfWeek' => 'Thursday',
                'price' => 44,
                'journeyTime' => 3,
                'startTime' => Carbon::now()->addHours(13)->toTimeString()
            ],
            [
                'departure' => 'Newcastle',
                'destination' => 'Cardiff',
                'dayOfWeek' => 'Friday',
                'price' => 34,
                'journeyTime' => 3,
                'startTime' => Carbon::now()->addHours(14)->toTimeString()
            ],
            [
                'departure' => 'Cardiff',
                'destination' => 'London',
                'dayOfWeek' => 'Friday',
                'price' => 36,
                'journeyTime' => 4,
                'startTime' => Carbon::now()->addHours(15)->toTimeString()
            ],
            [
                'departure' => 'Cardiff',
                'destination' => 'Newcastle',
                'dayOfWeek' => 'Saturday',
                'price' => 36,
                'journeyTime' => 4,
                'startTime' => Carbon::now()->addHours(16)->toTimeString()
            ],
            [
                'departure' => 'Glasgow',
                'destination' => 'Newcastle',
                'dayOfWeek' => 'Saturday',
                'price' => 50,
                'journeyTime' => 4,
                'startTime' => Carbon::now()->addHours(17)->toTimeString()
            ],
            [
                'departure' => 'Glasgow',
                'destination' => 'Birmingham',
                'dayOfWeek' => 'Sunday',
                'price' => 58,
                'journeyTime' => 3,
                'startTime' => Carbon::now()->addHours(18)->toTimeString()
            ],
            [
                'departure' => 'Manchester',
                'destination' => 'London',
                'dayOfWeek' => 'Monday',
                'price' => 16,
                'journeyTime' => 2,
                'startTime' => Carbon::now()->addHours(18)->toTimeString()
            ]
        ];

        collect($trainJourneys)->each(function ($trainJourney) {
            TrainJourney::create($trainJourney);
        });
    }
}
