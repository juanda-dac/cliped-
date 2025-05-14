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
            $table->smallInteger('id')->autoIncrement()->unsigned();
            $table->smallInteger('id_state')->nullable(false)->unsigned();
            $table->string('name', 100)->nullable(false);
            $table->string('city_cod', 10);

            $table->foreign('id_state')->references('id')->on('states')->onDelete('restrict');

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
