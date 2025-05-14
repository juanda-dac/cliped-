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
        Schema::create('roles', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unsigned();
            $table->smallInteger('id_user_type', unsigned: true)->nullable(false);
            $table->string('name', 45)->nullable(false);

            $table->foreign('id_user_type')->references('id')->on('users_types')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
