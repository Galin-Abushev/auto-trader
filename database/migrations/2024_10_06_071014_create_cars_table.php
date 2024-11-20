<?php

use App\Models\CarBrand;
use App\Models\CarEngine;
use App\Models\CarModel;
use App\Models\Employer;
use App\Models\Region;
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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employer::class);
            $table->foreignIdFor(CarBrand::class);
            $table->foreignIdFor(CarModel::class);
            $table->foreignIdFor(CarEngine::class);
            $table->foreignIdFor(Region::class);
            $table->string('car_version');
            $table->integer('car_price');
            $table->integer('car_km');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
