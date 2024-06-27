@extends('dashboard.layouts.main')

@section('title', 'Detail Ketersediaan')

@section('container')
<div class="container mt-5">
    <h1 class="text-center mb-4">Detail Ketersediaan</h1>

    <div class="card mb-3">
        <div class="card-header">
            <h3>{{ $ketersediaan->dudi->nama_industri }}</h3>
        </div>
        <div class="card-body">
            @php
            $jurusanArray = explode(', ', $ketersediaan->jurusan);
        @endphp
        <p><strong>Jurusan:</strong> {{ implode(', ', $jurusanArray) }}</p>
            <p><strong>Jumlah Siswa:</strong> {{ $ketersediaan->jumlah_siswa }}</p>
            <p><strong>Kuota:</strong> {{ $ketersediaan->kuota }}</p>
            <p><strong>Sisa Kuota:</strong> {{ $ketersediaan->sisa_kuota }}</p>
        </div>
    </div>

    <h2 class="text-center mb-4">Siswa Terdaftar</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ketersediaan->plotinganPkl as $plotingan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $plotingan->siswa->nama }}</td>
                    <td>{{ $plotingan->siswa->kelas }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Tidak ada siswa terdaftar</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="text-end">
        <a href="{{ route('ketersediaan.index') }}" class="btn btn-primary">Kembali ke Daftar</a>
    </div>
</div>
@endsection
