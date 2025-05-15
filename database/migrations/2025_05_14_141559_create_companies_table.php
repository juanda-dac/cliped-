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
        Schema::create('companies', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unsigned();
            $table->smallInteger('id_city')->unsigned()->nullable(false);
            $table->string('name', 150)->nullable(false);
            $table->string('doc_type', 15)->nullable(false);
            $table->string('doc_number', 45)->nullable(false);
            $table->string('address', 200)->nullable(false);
            $table->string('zone', 100)->nullable();
            $table->string('email', 100)->nullable(false);
            $table->string('phone', 100)->nullable(false);
            $table->binary('logo')->nullable();
            $table->string('instagram_url', 200);
            $table->string('tiktok_url', 200);
            $table->string('youtube_url', 200);
            $table->string('twiter_url', 200);

            $table->foreign('id_city')->references('id')->on('cities')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
