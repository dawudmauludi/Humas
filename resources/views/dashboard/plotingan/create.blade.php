@extends('dashboard.layouts.main')

@section('container')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Plotingan</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="{{ route('plotingan.store') }}" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="ketersediaan" class="form-label">Ketersediaan</label>
            <select class="form-select" name="id_ketersediaan" id="id_ketersediaan">
                @foreach ($ketersediaans as $ketersediaan)
                    <option value="{{ $ketersediaan->id }}"
                        data-jumlah-siswa="{{ $ketersediaan->jumlah_siswa }}"
                        data-sisa-kuota="{{ $ketersediaan->sisa_kuota }}">
                        {{ $ketersediaan->dudi->nama_industri }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <p>Jumlah Siswa: <span id="jumlah_siswa">0</span></p>
            <p>Sisa Kuota: <span id="sisa_kuota">0</span></p>
        </div>

        <div class="mb-3">
            <label for="siswa" class="form-label">Siswa</label>
            <select class="form-select" name="id_siswa">
                @foreach ($siswa as $sis)
                    <option value="{{ $sis->id }}">{{ $sis->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="pembimbing" class="form-label">Pembimbing</label>
            <select class="form-select" name="id_pembimbing">
                @foreach ($pembimbing as $pem)
                    <option value="{{ $pem->id }}">{{ $pem->nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.form-select').select2();
        
        $('#id_ketersediaan').change(function() {
            var selectedOption = $(this).find('option:selected');
            var jumlahSiswa = selectedOption.data('jumlah-siswa');
            var sisaKuota = selectedOption.data('sisa-kuota');
            $('#jumlah_siswa').text(jumlahSiswa);
            $('#sisa_kuota').text(sisaKuota);
        });

        // Trigger change event to set initial values
        $('#id_ketersediaan').trigger('change');
    });
</script>
@endsection
