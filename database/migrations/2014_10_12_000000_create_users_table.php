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
            $table->string('dni',8)->primary();
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->nullable();
            $table->unsignedBigInteger('id_office');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->dateTime('created_at',$precision=3);
            $table->dateTime('updated_at',$precision=3);
            $table->foreign('id_office')->references('id')->on('offices')->cascade();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
