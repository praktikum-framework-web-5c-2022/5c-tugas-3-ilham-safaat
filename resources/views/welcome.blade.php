@extends('main')

@section('title', 'Welcome')
@section('content')
<div class="container">
    <div class="row mt-5 py-3">
        <div class="col">
            <h1 class="">Dashboard</h1>
            <p class="">Halaman ini menampilkan statistik <span style="color:red;">SIAKAD</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Dosen
                    <div class="float-end">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jumlah Dosen</h5>
                    <p class="card-text">{{ $dosens }} Dosen</p>
                    <a href="{{ route('dosen.index') }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Mahasiswa
                    <div class="float-end">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jumlah Mahasiswa</h5>
                    <p class="card-text">{{ $mahasiswas }} Mahasiswa</p>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Mata Kuliah
                    <div class="float-end">
                        <i class="fa fa-book"></i>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Jumlah Mata Kuliah</h5>
                    <p class="card-text">{{ $matkuls }} Mata Kuliah</p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
