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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unsigned();
            $table->smallInteger('id_user_type', unsigned: true)->nullable(false);
            $table->smallInteger('id_city', unsigned: true)->nullable(false);
            $table->integer('id_role', unsigned: true)->nullable(false);
            $table->string('name', 50);
            $table->string('last_name', 50);
            $table->string('user_name', 20)->unique();
            $table->string('password', 500)->nullable(false);
            $table->string('password_text', 20);
            $table->string('email', 100);
            $table->string('phone', 100);
            $table->string('address', 200);
            $table->timestamps();
            $table->string('avatar_url', 250)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('doc_type', 10);
            $table->string('doc_number', 50);
            $table->char('sex', 1)->nullable(false);
            $table->string('sex_orientation', 50);
            $table->string('rh', 10);
            $table->json('data_value');
            $table->tinyInteger('status')->nullable(false)->default(1);

            $table->foreign('id_user_type')->references('id')->on('users_types')->onDelete('restrict');
            $table->foreign('id_city')->references('id')->on('cities')->onDelete('restrict');
            $table->foreign('id_role')->references('id')->on('roles')->onDelete('restrict');

        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('sessions');
    }
};
