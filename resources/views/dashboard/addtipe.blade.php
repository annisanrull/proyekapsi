@extends('layout/main')

@section('container')
<h3>{{ $judul }}</h3>
<br>
<div class="row">
    <div class="col-3">
        <form action="/tambahtipe" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Tipe</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan tipe...">

                @error('nama')
                <small class="text-danger">Nama Wajin diisi!</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="alamat">Alamat Tipe</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat...">

                @error('alamat')
                <small class="text-danger">Alamat Wajin diisi!</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection