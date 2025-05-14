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
        Schema::create('countries', function (Blueprint $table) {
            $table->smallInteger('id')->autoIncrement()->unsigned();
            $table->string('name', 100);
            $table->char('iso_cod_3', 3)->unique();
            $table->string('phone_prefix', 10);
            $table->binary('flag'); // binary is equivalent to BLOB in MySQL
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
