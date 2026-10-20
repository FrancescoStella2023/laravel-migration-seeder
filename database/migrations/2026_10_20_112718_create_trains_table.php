<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->integer("train_code");
            $table->string("company", 50);
            $table->string("departure_station", 50);
            $table->string("arrival_station", 50);
            $table->timestamp("departure_time")->nullable();
            $table->timestamp("arrival_time")->nullable();
            $table->integer("carriage_number");
            $table->boolean("on_time");
            $table->boolean("cancelled");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
