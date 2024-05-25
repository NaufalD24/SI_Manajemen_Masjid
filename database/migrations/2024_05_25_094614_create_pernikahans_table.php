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
        Schema::create('pernikahans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_jamaah');
            $table->string('nik_ktp_pria', 16);
            $table->string('nik_ktp_wanita', 16);
            $table->string('alamat');
            $table->timestamps();

            $table->foreign('id_jamaah')->references('id')->on('jamaahs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pernikahans');
    }
};
