<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pethotels', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255);
            $table->string("description", 2048);
            $table->string("city", 255);
            $table->string("address", 512);
            $table->string("phones", 255);
            $table->string("email", 255);
            $table->string("coordsGPS", 255);
            $table->string("siteURL", 512);
            $table->decimal("rating", 4, 2, true);
            $table->boolean("dog");
            $table->boolean("cat");
            $table->decimal("price", 7, 2, true);
            $table->string("freeDates", 2048);
            $table->boolean("feeding");
            $table->boolean("walks");
            $table->boolean("bathing");
            $table->boolean("nailCutting");
            $table->boolean("transportation");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pethotels');
    }
};
