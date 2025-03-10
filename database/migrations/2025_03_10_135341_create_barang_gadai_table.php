<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('barang_gadai', function (Blueprint $table) {
        $table->id();
        $table->string('nama_barang');
        $table->string('nasabah');
        $table->decimal('nilai_taksiran', 10, 2);
        $table->decimal('nilai_pinjaman', 10, 2);
        $table->enum('status', ['gadai', 'tebus']);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_gadai');
    }
};
