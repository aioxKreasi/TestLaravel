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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->integer('total_bayar');
            $table->string('penyedia');
            $table->enum('status', ['Pending', 'Wait', 'Active']);
            $table->timestamps();
            $table->foreignId('pembelian_pembeli_id');
            $table->foreignId('pembelian_produk_id');
            $table->foreignId('pembelian_produk_kategoriProduk_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
