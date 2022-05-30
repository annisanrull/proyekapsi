@extends('layout/main')

@section('container')
<h3 class="mb-3">{{ $judul }}</h3>
<form action="/tambahcalon/tambah" method="POST" class="" enctype="multipart/form-data">
    <div class="row md-6">
        <div class="col-6">
            @csrf
            <div class="form-group">
                <label for="nama">Masukkan Nama Calon</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama calon..">

                @error('nama')
                <small id="nama" class="form-text  text-danger">{{ $message }}</small>
                @enderror

            </div>

            <div class="form-group">
                <label for="tgl_lahir">Masukkan Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal lahir..">

                @error('tgl_lahir')
                <small id="tgl_lahir" class="form-text  text-danger">{{ $message }}</small>
                @enderror

            </div>

            <div class="form-group">
                <label for="umur_sekarang">Masukkan Umur Calon</label>
                <input type="number" class="form-control" id="umur_sekarang" name="umur_sekarang" placeholder="Masukkan umur sekarang..">

                @error('umur_sekarang')
                <small id="umur_sekarang" class="form-text  text-danger">{{ $message }}</small>
                @enderror

            </div>

            <div class="form-group">
                <label for="tempat_lahir">Masukkan Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir..">

                @error('tempat_lahir')
                <small id="tempat_lahir" class="form-text  text-danger">{{ $message }}</small>
                @enderror

            </div>

            <div class="form-group">
                <label for="alamat">Masukkan Alamat Lengkap</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>

                @error('alamat')
                <small id="alamat" class="form-text  text-danger">{{ $message }}</small>
                @enderror
            </div>



        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="tipe_id">Sebagai Calon</label>
                <select class="form-control" id="tipe_id" name="tipe_id">
                    <option selected>Silahkan pilih Sebagai Calon...</option>
                    @foreach($tipe as $t)
                    <option value="{{ $t->id }}">{{ $t->nama }}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="visi">Masukkan VISI</label>
                <textarea class="form-control" id="visi" name="visi" rows="3"></textarea>

                @error('visi')
                <small id="visi" class="form-text  text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="misi">Masukkan MISI</label>
                <textarea class="form-control" id="misi" name="misi" rows="3"></textarea>

                @error('misi')
                <small id="misi" class="form-text  text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="gambar" class="d-flex">Masukkan Gambar Calon</label>
                <input type="file" id="gambar" name="gambar">

                @error('gambar')
                <small id="gambar" class="form-text  text-danger">{{ $message }}</small>
                @enderror

            </div>
        </div>




        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
@endsection