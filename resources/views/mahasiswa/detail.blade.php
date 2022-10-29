@extends('main')
@section('title', 'Detail Mahasiswa')

@section('content')
<div class="container">
    <div class="row mt-5 py-5 justify-content-center">
        <div class="col-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/'.$mahasiswa->photo) }}" class="img-fluid rounded-start" alt="{{ $mahasiswa->nama }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $mahasiswa->nama }}</h5>
                            <p class="card-text">{{ $mahasiswa->nama }} adalah seorang mahasiswa di Universitas Singaperbangsa Karawang yang beralamat di {{ $mahasiswa->alamat }}</p>
                            <p class="card-text"><small class="text-muted">Terakhir diubah tanggal
                                    {{Carbon\Carbon::parse($mahasiswa->updated_at)->format('d-m-Y') ?? '' }}.
                                    {{ $mahasiswa->updated_at->diffForHumans() }}
                                </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5 justify-content-center">
        <div class="col-6">
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection

