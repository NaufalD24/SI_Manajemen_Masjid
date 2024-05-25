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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_imam');
            $table->unsignedBigInteger('id_jamaah');
            $table->unsignedBigInteger('id_donatur');
            $table->unsignedBigInteger('id_takmir');
            $table->string('nama');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->timestamps();

            $table->foreign('id_imam')->references('id')->on('imams');
            $table->foreign('id_jamaah')->references('id')->on('jamaahs');
            $table->foreign('id_donatur')->references('id')->on('donaturs');
            $table->foreign('id_takmir')->references('id')->on('takmirs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};
