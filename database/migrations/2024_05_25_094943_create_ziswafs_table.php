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
        Schema::create('ziswafs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_donatur');
            $table->unsignedBigInteger('id_takmir');
            $table->string('alamat');
            $table->integer('nominal_donasi'); //
            $table->string('metode_pembayaran');
            $table->integer('kas_masuk'); 
            $table->integer('kas_keluar'); 
            $table->timestamps();

            $table->foreign('id_donatur')->references('id')->on('donaturs');
            $table->foreign('id_takmir')->references('id')->on('takmirs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ziswafs');
    }
};
