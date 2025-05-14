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
        Schema::create('providers_users', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unsigned();
            $table->integer('id_user', unsigned: true)->nullable(false);
            $table->integer('id_provider', unsigned: true)->nullable(false);

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_provider')->references('id')->on('providers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers_users');
    }
};
