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

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#userID</th>
                        <th>Nama Calon</th>
                        <th>JUMLAHH SUARA</th>

                    </tr>
                </thead>

                <tbody>

                    @foreach($calon as $t)

                    <tr>
                        <td>{{ $t->id }}</td>
                        <td>{{ $t->nama }}</td>
                        <td> <a class="btn btn-primary">{{ $voting }} Suara</a> </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection