<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangGadai extends Model
{
    use HasFactory;

    protected $table = 'barang_gadai';
    protected $fillable = ['nama_barang', 'nasabah', 'nilai_taksiran', 'nilai_pinjaman', 'status'];
}
