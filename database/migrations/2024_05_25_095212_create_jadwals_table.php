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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->bigIncrements('íd');
            $table->unsignedBigInteger('id_imam');
            $table->string('macam_sholat');
            $table->time('waktu_masuk_sholat');
            $table->time('waktu_habis_sholat');
            $table->timestamps();

            $table->foreign('id_imam')->references('id')->on('imams');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
