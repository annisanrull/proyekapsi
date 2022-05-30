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
        <a href="/tambahwarga" class="btn btn-primary">Tambahkan Warga Baru!</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#no</th>
                        <th>NIK</th>
                        <th>Nama Warga</th>
                        <th>Warga Desa</th>
                        <th>TINDAKAN</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($user as $t)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $t->nik }}</td>
                        <td>{{ $t->nama }}</td>
                        <td>{{ $t->desa }}</td>
                        <td>
                            <a href="/lihatwarga/{{ $t->id }}" class="text-primary">Lihat</a> |
                            <a href="/editwarga/{{ $t->id }}" class="text-warning">Edit</a> |
                            <a href="/hapuswarga/{{ $t->id }}" class="text-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection