@extends('layout/main')

@section('container')
<h3 class="mb-3">{{ $judul }}</h3>
@foreach($warga as $w)

<div class="row md-6">
    <div class="col-6">
        @csrf
        <div class="form-group">
            <label for="nik">Masukkan NIK Warga</label>
            <input type="text" class="form-control" id="nik" name="nik" value="{{ $w->nik }}" readonly>

            @error('nik')
            <small id="nik" class="form-text  text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">
            <label for="nama">Masukkan Nama Warga</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $w->nama }}" readonly>

            @error('nama')
            <small id="nama" class="form-text  text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">
            <label for="tgl_lahir">Masukkan Tanggal Lahir</label>
            <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $w->tgl_lahir }}" readonly>

            @error('tgl_lahir')
            <small id="tgl_lahir" class="form-text  text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">
            <label for="tmpt_lahir">Masukkan Tempat Lahir</label>
            <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" value="{{ $w->tmpt_lahir }}" readonly>

            @error('tmpt_lahir')
            <small id="tmpt_lahir" class="form-text  text-danger">{{ $message }}</small>
            @enderror

        </div>


        <div class="form-group">
            <label for="umur">Masukkan Umur Warga</label>
            <input type="number" class="form-control" id="umur" name="umur" value="{{ $w->umur }}" readonly>

            @error('umur')
            <small id="umur" class="form-text  text-danger">{{ $message }}</small>
            @enderror

        </div>






    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="alamat">Masukkan Alamat Lengkap</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" readonly>{{ $w->alamat }}</textarea>

            @error('alamat')
            <small id="alamat" class="form-text  text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="rt">RT</label>
            <input type="number" class="form-control" id="rt" name="rt" value="{{ $w->rt }}" readonly>

            @error('rt')
            <small id="rt" class="form-text  text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="rw">RW</label>
            <input type="number" class="form-control" id="rw" name="rw" value="{{ $w->rw }}" readonly>

            @error('rw')
            <small id="rw" class="form-text  text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="desa">DESA</label>
            <input type="text" class="form-control" id="desa" name="desa" value="{{ $w->desa }}" readonly>

            @error('desa')
            <small id="desa" class="form-text  text-danger">{{ $message }}</small>
            @enderror
        </div>




    </div>


</div>

@endforeach
@endsection