@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Barang Gadai</h2>
    <form action="{{ route('barang-gadai.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nasabah</label>
            <input type="text" name="nasabah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nilai Taksiran</label>
            <input type="number" name="nilai_taksiran" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nilai Pinjaman</label>
            <input type="number" name="nilai_pinjaman" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="gadai">Gadai</option>
                <option value="tebus">Tebus</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('barang-gadai.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
