<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        $this->call([
            RolesSeeder::class,
            UsersSeeder::class,
            AirJourneysSeeder::class,
            BusJourneysSeeder::class,
            TrainJourneysSeeder::class
        ]);
    }
}
