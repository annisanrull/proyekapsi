@extends('layout/main')

@section('container')

<style>
    .bd-placeholder-img {
        background-size: cover;
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>

@if(auth()->user()->role_id == 1)
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ $judul }}</h1>
</div>

<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

    @foreach($calon as $c)
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">{{ $c->nama }}</h4>
            </div>
            <div class="card-body">
                <img src="{{ URL::asset('photo-calon/'.$c->gambar) }}" alt="" width="100%" height="225" class="bd-placeholder-img card-img-top">
                <a type="button" href="/jumlahvoting/{{ $c->id }}" class="w-100 btn btn-lg btn-outline-primary mt-4">Lihat Jumlah Voting</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@else
<!-- Page Heading -->
<div class="album bg-light">
    <div class="container">
        <h1 class="h3 mb-0 text-gray-800">{{ $judul }}</h1>
        @if(session()->has('pesan'))
        <div class="alert alert-success">{{ session('pesan') }}</div>
        @endif
    </div>
</div>


<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($calon as $c)
            @if(auth()->user()->status == 'belum')
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ URL::asset('photo-calon/'.$c->gambar) }}" alt="" width="100%" height="225" class="bd-placeholder-img card-img-top" style="object-fit:cover">


                    <div class="card-body">
                        <p class="card-text text-center">{{ $c->nama }}</p>
                        <div class=" d-flex justify-content-between align-items-center">
                            <form action="/voting" method="POST">
                                @csrf
                                <div class="btn-group ">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="calon_id" value="{{ $c->id }}">
                                    <input type="hidden" name="voting" value="1">
                                    <button type="submit" class="btn btn-primary">Voting Sekarang</button>
                                </div>
                            </form>
                            <a type="button" href="/lihatcalon/{{$c->id }}" class="btn btn-outline-info">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="col">
                <div class="alert alert-warning">Maaf, kamu telah melakukan voting!!</div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endif

@endsection