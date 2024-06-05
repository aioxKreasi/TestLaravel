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
        Schema::create('alamat_pembelis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provinsi_id');
            $table->foreignId('kabupaten_id');
            $table->foreignId('kecamatan_id');
            $table->foreignId('kelurahan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat_pembelis');
    }
};
