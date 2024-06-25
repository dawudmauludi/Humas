@extends('layout.app')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Siswa') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="/siswa">
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nomor_induk_siswa" class="form-label">Nomor Induk Siswa</label>
                            <input type="text" class="form-control @error('nomor_induk_siswa') is-invalid @enderror" id="nomor_induk_siswa" name="nomor_induk_siswa" value="{{ old('nomor_induk_siswa') }}" required>
                            @error('nomor_induk_siswa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jenkel" class="form-label">Jenis Kelamin</label>
                            <select class="form-select @error('jenkel') is-invalid @enderror" id="jenkel" name="jenkel" required>
                                <option value="">Pilih Kelamin</option>
                                <option value="laki-laki" {{ old('jenkel') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="perempuan" {{ old('jenkel') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenkel')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
                            @error('tempat_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                            @error('tanggal_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                           <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agama') }}" required>
                            @error('agama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-select @error('kelas') is-invalid @enderror" id="kelas" name="kelas" required>
                                <option value="">Pilih Kelas</option>
                                @foreach(['XII KIMIA INDUSTRI 1', 'XII KIMIA INDUSTRI 2', 'XII KIMIA INDUSTRI 3', 'XII KIMIA ANALIS 1', 'XII KIMIA ANALIS 2', 'XII TEKNIK KOMPUTER DAN JARINGAN 1', 'XII TEKNIK KOMPUTER DAN JARINGAN 2', 'XII TEKNIK KOMPUTER DAN JARINGAN 3', 'XII REKAYASA PERANGKAT LUNAK 1', 'XII REKAYASA PERANGKAT LUNAK 2', 'XII DESAIN KOMUNIKASI VISUAL 1', 'XII DESAIN KOMUNIKASI VISUAL 2', 'XII DESAIN KOMUNIKASI VISUAL 3', 'XII MANAJEMEN PERKANTORAN 1', 'XII MANAJEMEN PERKANTORAN 2', 'XII AKUNTANSI 1', 'XII AKUNTANSI 2', 'XII AKUNTANSI 3', 'XII BISNIS DIGITAL 1', 'XII BISNIS DIGITAL 2'] as $kelas)
                                    <option value="{{ $kelas }}" {{ old('kelas') == $kelas ? 'selected' : '' }}>{{ $kelas }}</option>
                                @endforeach
                            </select>
                            @error('kelas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required>{{ old('alamat') }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kota" class="form-label">Kabupaten / Kota</label>
                            <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" value="{{ old('kota') }}" required>
                            @error('kota')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="no_telp" class="form-label">No Telepon</label>
                            <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{ old('no_telp') }}" required>
                            @error('no_telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama_orangTua" class="form-label">Nama Orang Tua</label>
                            <input type="text" class="form-control @error('nama_orangTua') is-invalid @enderror" id="nama_orangTua" name="nama_orangTua" value="{{ old('nama_orangTua') }}" required>
                            @error('nama_orangTua')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama_industri" class="form-label">Nama Industri</label>
                            <input type="text" class="form-control @error('nama_industri') is-invalid @enderror" id="nama_industri" name="nama_industri" value="{{ old('nama_industri') }}" required>
                            @error('nama_industri')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat_industri" class="form-label">Alamat Industri</label>
                            <textarea class="form-control @error('alamat_industri') is-invalid @enderror" id="alamat_industri" name="alamat_industri" required>{{ old('alamat_industri') }}</textarea>
                            @error('alamat_industri')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_negara" class="form-label">Negara</label>
                            <textarea class="form-control @error('nama_negara') is-invalid @enderror" id="nama_negara" name="nama_negara" required>{{ old('nama_negara') }}</textarea>
                            @error('nama_negara')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
