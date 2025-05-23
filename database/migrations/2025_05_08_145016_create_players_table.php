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
        Schema::create('players', function (Blueprint $table) {
            $table->string('dni',8)->primary();
            $table->string('name');
            $table->string('lastname');
            $table->dateTime('born',$precision=3);
            $table->string('photo');
            $table->string('post');
            $table->unsignedBigInteger('id_teams');
            $table->unsignedBigInteger('id_offices'); 
            $table->unsignedBigInteger('id_contracts');
            $table->foreign('id_teams')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('id_offices')->references('id')->on('offices')->onDelete('cascade');
            $table->foreign('id_contracts')->references('id')->on('contracts')->onDelete('cascade');
            $table->dateTime('created_at',$precision=3);
            $table->dateTime('updated_at',$precision=3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
