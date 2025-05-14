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
        Schema::create('permissions', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unsigned();
            $table->smallInteger('id_action', unsigned: true)->nullable(false);
            $table->integer('id_role', unsigned: true)->nullable(false);
            $table->integer('id_process', unsigned: true)->nullable(false);
            $table->timestamps();

            $table->foreign('id_action')->references('id')->on('actions')->onDelete('restrict');
            $table->foreign('id_role')->references('id')->on('roles')->onDelete('restrict');
            $table->foreign('id_process')->references('id')->on('processes')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
