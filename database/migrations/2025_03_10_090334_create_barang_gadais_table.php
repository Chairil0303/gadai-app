<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('barang_gadais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nasabah_id')->constrained('nasabah')->onDelete('cascade');
            $table->string('nama_barang');
            $table->text('deskripsi');
            $table->decimal('nilai_taksiran', 10, 2);
            $table->decimal('nilai_pinjaman', 10, 2);
            $table->enum('status', ['digadai', 'ditebus', 'dilelang'])->default('digadai');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('barang_gadais');
    }
};
