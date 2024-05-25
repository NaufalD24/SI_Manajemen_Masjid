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
        Schema::create('takmirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_takmir');
            $table->string('jabatan');
            $table->string('jk');
            $table->string('alamat');
            $table->string('no_hp',12);
            $table->date('tanggal_bergabung');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('takmirs');
    }
};
