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
        Schema::create('customers_users', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unsigned();
            $table->integer('id_branch', unsigned: true)->nullable(false);
            $table->integer('id_user', unsigned: true)->nullable(false);

            $table->foreign('id_branch')
                ->references('id')->on('branches')
                ->onDelete('restrict');

            $table->foreign('id_user')
                ->references('id')->on('users')
                ->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers_users');
    }
};
