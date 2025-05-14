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
        Schema::create('departments_users', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unsigned();
            $table->integer('id_user', unsigned: true)->nullable(false);
            $table->smallInteger('id_department', unsigned: true)->nullable(false);
            $table->smallInteger('id_position', unsigned: true)->nullable(false);
            $table->timestamps();
            $table->tinyInteger('state')->nullable(false)->default(1);
            $table->text('function');
            $table->char('leader')->nullable(false);

            $table->foreign('id_user')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('id_department')->references('id')->on('departments')->onDelete('restrict');
            $table->foreign('id_position')->references('id')->on('positions')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments_users');
    }
};
