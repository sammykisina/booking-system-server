<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('train_journeys', function (Blueprint $table) {
            $table->id();

            $table->string(column: 'departure');
            $table->string(column: 'destination');
            $table->string(column: 'dayOfWeek');
            $table->integer(column: 'price');
            $table->integer(column: 'journeyTime');

            $table->time(column: 'startTime');
            $table->timestamps();
        });
    }
};
