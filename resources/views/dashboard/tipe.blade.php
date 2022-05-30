@extends('layout/main')

@section('container')
<div class="card shadow mb-4">
    @if(session()->has('pesan'))
    <div class="alert alert-success" role="alert">
        {{ session('pesan') }}
    </div>
    @endif
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ $judul }}</h6>
    </div>
    <div class="card-header py-3">
        <a href="/tipe/tambah" class="btn btn-primary">Tambahkan Tipe Pemilihan</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#no</th>
                        <th>Nama Tipe</th>
                        <th>Alamat Tipe</th>
                        <th>TINDAKAN</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tipe as $t)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $t->nama }}</td>
                        <td>{{ $t->alamat }}</td>
                        <td>
                            <a href="/hapustipe/{{ $t->id }}" class="text-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection