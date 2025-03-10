@extends('layouts.app')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


@section('content')
<div class="container">
    <h2>Barang Gadai</h2>
    <a href="{{ route('barang-gadai.create') }}" class="btn btn-primary">Tambah Barang</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Nasabah</th>
                <th>Nilai Taksiran</th>
                <th>Nilai Pinjaman</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang_gadai as $barang)
                <tr>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->nasabah }}</td>
                    <td>{{ $barang->nilai_taksiran }}</td>
                    <td>{{ $barang->nilai_pinjaman }}</td>
                    <td>{{ $barang->status }}</td>
                    <td>
                        <a href="{{ route('barang-gadai.edit', $barang->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('barang-gadai.destroy', $barang->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
