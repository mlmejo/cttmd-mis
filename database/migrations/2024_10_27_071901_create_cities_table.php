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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('region_desc');
            $table->string('province_code');
            $table->string('psgc_code');
            $table->string('city_name');
            $table->string('city_code')->unique();
            $table->timestamps();

            $table->foreign('region_desc')
                ->references('region_code')
                ->on('regions')
                ->cascadeOnDelete();

            $table->foreign('province_code')
                ->references('province_code')
                ->on('provinces')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
