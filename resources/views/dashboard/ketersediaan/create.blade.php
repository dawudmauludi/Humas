@extends('dashboard.layouts.main')

@section('title', 'Tambah Ketersediaan')

@section('container')
<div class="container mt-5">
    <h1 class="text-center mb-4">Tambah Ketersediaan</h1>

    <form action="/dashboard/ketersediaan" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_dudi" class="form-label">DUDI</label>
            <select class="form-select" id="id_dudi" name="id_dudi" required>
                @foreach ($dudis as $dudi)
                    <option value="{{ $dudi->id }}">{{ $dudi->nama_industri }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
        </div>
        <div class="mb-3">
            <label for="jumlah_siswa" class="form-label">Jumlah Siswa</label>
            <input type="number" class="form-control" id="jumlah_siswa" name="jumlah_siswa" required>
        </div>
        <div class="mb-3">
            <label for="kuota" class="form-label">Kuota</label>
            <input type="number" class="form-control" id="kuota" name="kuota" required>
        </div>
        <div class="mb-3">
            <label for="sisa_kuota" class="form-label">Sisa Kuota</label>
            <input type="number" class="form-control" id="sisa_kuota" name="sisa_kuota" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
