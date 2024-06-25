@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> PLOTINGAN PKL</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8">
    <a href="/dashboard/plotingan/create" class="btn btn-primary">Create New Plotingan</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Dudi</th>
                <th scope="col">Siswa</th>
                <th scope="col">Pembimbing</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plotingan as $ploting)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ploting->dudi->nama }}</td>
                <td>{{ $ploting->siswa->nama }}</td>
                <td>{{ $ploting->pembimbing->nama }}</td>
                <td>
                    <a href="/dashboard/plotingan/{{ $ploting->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/plotingan/{{ $ploting->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/plotingan/{{ $ploting->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Kamu Yakin Ingin Menghapus?')"><span data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
