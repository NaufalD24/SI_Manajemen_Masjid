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
        Schema::create('donaturs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_jamaah');
            $table->string('nama_donatur');
            $table->string('alamat');
            $table->string('nominal_donasi', 15);
            $table->string('metode_pembayaran');
            $table->timestamps();

            $table->foreign('id_jamaah')->references('id')->on('jamaahs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donaturs');
    }
};
