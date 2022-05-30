@extends('layout/main')

@section('container')
<h3 class="mb-3">{{ $judul }}</h3>
<form action="/buatdatawarga" method="POST" class="" enctype="multipart/form-data">
    <div class="row md-6">
        <div class="col-6">
            @csrf
            <div class="form-group">
                <label for="nik">Masukkan NIK Warga</label>
                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan nik warga..">

                @error('nik')
                <small id="nik" class="form-text  text-danger">{{ $message }}</small>
                @enderror

            </div>

            <div class="form-group">
                <label for="nama">Masukkan Nama Warga</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama warga..">

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
                <label for="tmpt_lahir">Masukkan Tempat Lahir</label>
                <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" placeholder="Masukkan Tempat Lahir..">

                @error('tmpt_lahir')
                <small id="tmpt_lahir" class="form-text  text-danger">{{ $message }}</small>
                @enderror

            </div>


            <div class="form-group">
                <label for="umur">Masukkan Umur Warga</label>
                <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan umur sekarang..">

                @error('umur')
                <small id="umur" class="form-text  text-danger">{{ $message }}</small>
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
                <label for="rt">RT</label>
                <input type="number" class="form-control" id="rt" name="rt" placeholder="Masukkan RT..">

                @error('rt')
                <small id="rt" class="form-text  text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="rw">RW</label>
                <input type="number" class="form-control" id="rw" name="rw" placeholder="Masukkan RW..">

                @error('rw')
                <small id="rw" class="form-text  text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="desa">DESA</label>
                <input type="text" class="form-control" id="desa" name="desa" placeholder="Masukkan desa..">

                @error('desa')
                <small id="desa" class="form-text  text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan desa..">

                @error('password')
                <small id="password" class="form-text  text-danger">{{ $message }}</small>
                @enderror
            </div>


        </div>




        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
@endsection