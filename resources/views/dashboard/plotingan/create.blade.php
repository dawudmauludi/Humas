@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Plotingan</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/plotingan" class="mb-5" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="dudi" class="form-label">Dudi</label>
          <select class="form-select" name="id_dudi">
            @foreach ($dudi as $dud)
            @if (old('id_dudi') == $dud->id)
            <option value="{{ $dud->id }}" selected>{{ $dud->nama }}</option>
                @else
                <option value="{{ $dud->id }}">{{ $dud->nama }}</option>
            @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="siswa" class="form-label">Siswa</label>
          <select class="form-select" name="id_siswa">
            @foreach ($siswa as $sis)
            @if (old('id_siswa') == $sis->id)
            <option value="{{ $sis->id }}" selected>{{ $sis->nama }}</option>
                @else
                <option value="{{ $sis->id }}">{{ $sis->nama }}</option>
            @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="pembimbing" class="form-label">Pembimbing</label>
          <select class="form-select" name="id_pembimbing">
            @foreach ($pembimbing as $pem)
            @if (old('id_pembimbing') == $pem->id)
            <option value="{{ $pem->id }}" selected>{{ $pem->nama }}</option>
                @else
                <option value="{{ $pem->id }}">{{ $pem->nama }}</option>
            @endif
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

<!-- Tambahkan link Select2 CSS dan JS di bagian bawah sebelum </body> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
  $(document).ready(function() {
    $('.form-select').select2();
  });
</script>

@endsection
