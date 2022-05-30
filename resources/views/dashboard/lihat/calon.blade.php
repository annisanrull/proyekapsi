@extends('layout/main')

@section('container')

<div class="content-wrapper">

    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="">
                                @foreach($calon as $d)
                                <img src="{{ URL::asset('photo-calon/'.$d->gambar) }}" class="img-thumbnail">
                                @endforeach

                            </div>
                            <h5 class="user-name"></h5>
                            <h6 class="user-email"></h6>
                            <h6 class="user-email"></h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-header">
                    <div class="card-title">{{ $judul }}</div>
                </div>
                <div class=" card-body">
                    <div class="row gutters">
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
                            @foreach($calon as $d)
                            <div class="form-group">
                                <label for="fullName">NAMA</label>
                                <input type="text" class="form-control" id="fullName" name="nim" value="{{ $d->nama }}" readonly="">
                            </div>
                            <div class="form-group">
                                <label for="eMail">TANGGAL LAHIR</label>
                                <input type="email" class="form-control" id="eMail" readonly="" name="name" value="{{ $d->tgl_lahir }}">
                            </div>

                            <div class="form-group">
                                <label for="eMail">TEMPAT LAHIR</label>
                                <input type="email" class="form-control" id="eMail" readonly="" name="name" value="{{ $d->tempat_lahir }}">
                            </div>

                            <div class="form-group">
                                <label for="phone">UMUR</label>
                                <input type="text" class="form-control" id="phone" readonly="" name="email" value="{{ $d->umur_sekarang }}">
                            </div>

                            <div class="form-group">
                                <label for="addRess">ALAMAT</label>
                                <input type="text" class="form-control" id="addRess" value="{{ $d->alamat }}" readonly="">
                            </div>

                            <div class="form-group">
                                <label for="addRess">INGIN MENJABAT SEBAGAI</label>
                                <input type="text" class="form-control" id="addRess" value="{{ $d->tipe->nama }}" readonly="">
                            </div>
                            @endforeach
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">VISI</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> {{ $d->visi }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">MISI</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> {{ $d->misi }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

@endsection