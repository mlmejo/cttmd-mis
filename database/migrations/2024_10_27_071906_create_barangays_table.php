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
        Schema::create('barangays', function (Blueprint $table) {
            $table->id();
            $table->string('region_code');
            $table->string('province_code');
            $table->string('city_code');
            $table->string('brgy_name');
            $table->string('brgy_code')->unique();
            $table->timestamps();

            $table->foreign('region_code')
                ->references('region_code')
                ->on('regions')
                ->cascadeOnDelete();

            $table->foreign('province_code')
                ->references('province_code')
                ->on('provinces')
                ->cascadeOnDelete();

            $table->foreign('city_code')
                ->references('city_code')
                ->on('cities')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangays');
    }
};
