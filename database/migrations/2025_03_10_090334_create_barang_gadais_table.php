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
        Schema::create('barang_gadai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nasabah_id')->constrained('nasabah')->onDelete('cascade');
            $table->string('nama_barang', 100);
            $table->text('deskripsi');
            $table->decimal('nilai_taksiran', 10, 2);
            $table->decimal('nilai_pinjaman', 10, 2);
            $table->enum('status', ['digadai', 'ditebus', 'dilelang'])->default('digadai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_gadais');
    }
};
