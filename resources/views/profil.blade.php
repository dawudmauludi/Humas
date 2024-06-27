@extends('layout.index')

@section('title','profil')


    
@section('container')
<div class="container mt-5">
    <h1 class="text-center mb-4">Profil Siswa</h1>
    @if ($siswa)
        <div class="row">
            <!-- Informasi Siswa -->
            <div class="col-md-6">
                <h5>Informasi Siswa</h5>
                <hr>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" value="{{ $siswa->nama }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="nomor_induk_siswa" class="form-label">Nomor Induk Siswa</label>
                    <input type="text" class="form-control" id="nomor_induk_siswa" value="{{ $siswa->nomor_induk_siswa }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="jenkel" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenkel" value="{{ $siswa->jenkel }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" value="{{ $siswa->tempat_lahir }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="kelas" value="{{ $siswa->kelas }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="agama" value="{{ $siswa->agama }}" readonly>
                </div>
            </div>

            <!-- Informasi Orang Tua -->
            <div class="col-md-6">
                <h5>Informasi Orang Tua</h5>
                <hr>
                <div class="mb-3">
                    <label for="nama_orangTua" class="form-label">Nama Orang Tua</label>
                    <input type="text" class="form-control" id="nama_orangTua" value="{{ $siswa->nama_orangTua }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" value="{{ $siswa->alamat }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="kota" class="form-label">Kabupaten / Kota</label>
                    <input type="text" class="form-control" id="kota" value="{{ $siswa->kota }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="no_telp" value="{{ $siswa->no_telp }}" readonly>
                </div>
            </div>

            <!-- Informasi DUDI -->
            <div class="row">
                @if ($siswa->plotinganPkl)
                    <div class="col-md-12">
                        <h5>Informasi DUDI</h5>
                        <hr>
                        <div class="mb-3">
                            <label for="nama_industri" class="form-label">Nama Industri</label>
                            <input type="text" class="form-control" id="nama_industri" value="{{ $siswa->plotinganPkl->ketersediaan->dudi->nama_industri }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="alamat_industri" class="form-label">Alamat Industri</label>
                            <input type="text" class="form-control" id="alamat_industri" value="{{ $siswa->plotinganPkl->ketersediaan->dudi->alamat }}" readonly>
                        </div>
                    </div>
                @else
                    <div class="col-md-12">
                        <p class="text-center text-warning">Siswa belum dipploting ke DUDI.</p>
                    </div>
                @endif
            </div>
    
           
        <div class="text-center">
            <a href="{{ route('home') }}" class="btn btn-primary mt-3">Kembali ke Beranda</a>
        </div>
    @else
        <p class="text-center">Data siswa tidak ditemukan.</p>
    @endif
</div>
@endsection