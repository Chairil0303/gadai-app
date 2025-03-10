<?php
namespace App\Http\Controllers;

use App\Models\BarangGadai;
use Illuminate\Http\Request;

class BarangGadaiController extends Controller
{
    public function index()
    {
        $barang_gadai = BarangGadai::all();
        return view('barang_gadai.index', compact('barang_gadai'));
    }

    public function create()
    {
        return view('barang_gadai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'nama_barang' => 'required|string|max:255',
        'nasabah' => 'required|string|max:255',
        'nilai_taksiran' => 'required|numeric',
        'nilai_pinjaman' => 'required|numeric',
        'status' => 'required|in:gadai,tebus',
    ]);

    BarangGadai::create($request->all());

    return redirect()->route('barang-gadai.index')->with('success', 'Barang gadai berhasil ditambahkan!');

    }

    public function edit(BarangGadai $barang_gadai)
    {
        return view('barang_gadai.edit', compact('barang_gadai'));
    }

    public function update(Request $request, BarangGadai $barang_gadai)
    {
        $barang_gadai->update($request->all());
        return redirect()->route('barang-gadai.index');
    }

    public function destroy(BarangGadai $barang_gadai)
    {
        $barang_gadai->delete();
        return redirect()->route('barang-gadai.index');
    }
}
