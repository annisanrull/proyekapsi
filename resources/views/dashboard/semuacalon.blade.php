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
        <a href="/tambahcalon" class="btn btn-primary">Tambahkan Calon Baru!</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#no</th>
                        <th>Nama Calon</th>
                        <th>Sebagai Calon</th>
                        <th>TINDAKAN</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($calon as $t)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $t->nama }}</td>
                        <td>{{ $t->tipe->nama }}</td>
                        <td>
                            <a href="/lihatcalon/{{ $t->id }}" class="text-primary">Lihat</a> |
                            <a href="/editcalon/{{ $t->id }}" class="text-warning">Edit</a> |
                            <a href="/hapuscalon/{{ $t->id }}" class="text-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection