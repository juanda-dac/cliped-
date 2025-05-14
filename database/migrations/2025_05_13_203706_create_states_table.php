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
        Schema::create('states', function (Blueprint $table) {
            $table->smallInteger('id')->autoIncrement()->unsigned();
            $table->smallInteger('country_id')->nullable(false)->unsigned();
            $table->string('name', 100)->nullable(false);
            $table->string('state_cod', 10);

            $table->foreign('country_id')->references('id')->on('countries')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
