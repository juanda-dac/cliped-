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
        Schema::create('processes', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unsigned();
            $table->integer('id_top', unsigned: true);
            $table->string('name', 50)->nullable(false);
            $table->string('description', 200)->nullable();
            $table->string('url', 200)->nullable(false);
            $table->binary('icon')->nullable();
            $table->smallInteger('order', unsigned: true)->nullable(false);
            $table->char('hidden', 1)->nullable(false)->default('0');
            $table->timestamps();
            $table->tinyInteger('state', unsigned: true)->nullable(false)->default(1);

            $table->foreign('id_top')
                ->references('id')
                ->on('processes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processes');
    }
};
