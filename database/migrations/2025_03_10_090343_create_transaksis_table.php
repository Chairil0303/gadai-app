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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barang_id')->constrained('barang_gadai')->onDelete('cascade');
            $table->date('tanggal_gadai');
            $table->date('jatuh_tempo');
            $table->decimal('jumlah_pinjaman', 10, 2);
            $table->decimal('bunga', 5, 2);
            $table->enum('status', ['aktif', 'lunas', 'gagal_lunas'])->default('aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
