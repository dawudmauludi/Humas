@extends('layout.index')
@section('title','e - journal')
    
@section('container')
    <main>
        <div class="container">
            <h1 class="mb-4">Formulir Absen</h1>
            <form id="attendanceForm" method="POST" action="{{ route('absensi.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Status Absen:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="hadir" value="hadir" checked>
                        <label class="form-check-label" for="hadir">
                            Hadir
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="tidak_hadir" value="tidak_hadir">
                        <label class="form-check-label" for="tidak_hadir">
                            Tidak Hadir
                        </label>
                    </div>
                </div>
                <div class="mb-3" id="keteranganField" style="display: none;">
                    <label for="keterangan" class="form-label">Keterangan:</label>
                    <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>


    <script>
      document.addEventListener('DOMContentLoaded', function() {
    var hadirRadio = document.getElementById('hadir');
    var tidakHadirRadio = document.getElementById('tidak_hadir');
    var keteranganField = document.getElementById('keteranganField');

    function toggleKeteranganField() {
        if (tidakHadirRadio.checked) {
            keteranganField.style.display = 'block';
        } else {
            keteranganField.style.display = 'none';
        }
    }

    hadirRadio.addEventListener('change', toggleKeteranganField);
    tidakHadirRadio.addEventListener('change', toggleKeteranganField);

    // Initial check to set the visibility of the keterangan field
    toggleKeteranganField();
});
    </script>
@endsection