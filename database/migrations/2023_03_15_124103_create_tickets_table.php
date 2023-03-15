<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticketNumber');

            $table->string(column: 'journey');
            $table->integer(column: 'price');

            $table->string(column: "means");

            $table->foreignId(column: 'user_id')
                ->index()
                ->constrained();

            $table->timestamps();
        });
    }
};
