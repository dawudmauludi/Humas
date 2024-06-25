@extends('layout.index')

@section('container')
<div class="container mt-5">
    <h1 class="text-center mb-4">Input Journal</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Menampilkan pesan error umum -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/journal" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
            @error('tanggal')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="jam_datang" class="form-label">Jam Datang</label>
            <input type="time" class="form-control @error('jam_datang') is-invalid @enderror" id="jam_datang" name="jam_datang" value="{{ old('jam_datang') }}" required>
            @error('jam_datang')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jam_pulang" class="form-label">Jam Pulang</label>
            <input type="time" class="form-control @error('jam_pulang') is-invalid @enderror" id="jam_pulang" name="jam_pulang" value="{{ old('jam_pulang') }}" required>
            @error('jam_pulang')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="uraian_kegiatan" class="form-label">Uraian Kegiatan</label>
            <textarea class="form-control @error('uraian_kegiatan') is-invalid @enderror" id="uraian_kegiatan" name="uraian_kegiatan" rows="3" required>{{ old('uraian_kegiatan') }}</textarea>
            @error('uraian_kegiatan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="foto_kegiatan" class="form-label">Foto Kegiatan</label>
            <input class="form-control @error('foto_kegiatan') is-invalid @enderror" type="file" id="foto_kegiatan" name="foto_kegiatan" required>
            @error('foto_kegiatan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="catatan" class="form-label">Catatan</label>
            <textarea class="form-control @error('catatan') is-invalid @enderror" id="catatan" name="catatan" rows="3">{{ old('catatan') }}</textarea>
            @error('catatan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
