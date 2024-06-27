@extends('dashboard.layouts.main')

@section('title', 'Daftar Ketersediaan')

@section('container')
<div class="container mt-5">
    <h1 class="text-center mb-4">Daftar Ketersediaan</h1>

    <div class="text-end mb-3">
        <a href="/dashboard/ketersediaan/create" class="btn btn-primary">Tambah Ketersediaan</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Industri</th>
                <th>Jurusan</th>
                <th>Jumlah Siswa</th>
                <th>Kuota</th>
                <th>Sisa Kuota</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ketersediaans as $ketersediaan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ketersediaan->dudi->nama_industri }}</td>
                    <td>{{ $ketersediaan->jurusan }}</td>
                    <td>{{ $ketersediaan->jumlah_siswa }}</td>
                    <td>{{ $ketersediaan->kuota }}</td>
                    <td>{{ $ketersediaan->sisa_kuota }}</td>
                    <td>
                        <a href="{{ route('ketersediaan.show', $ketersediaan->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('ketersediaan.edit', $ketersediaan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('ketersediaan.destroy', $ketersediaan->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
