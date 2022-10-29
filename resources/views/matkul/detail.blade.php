@extends('main')
@section('title', 'Detail Mata Kuliah')

@section('content')
<div class="container">
    <div class="row mt-5 py-5 justify-content-center">
        <div class="col-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $matkul->nama_matkul }}</h5>
                            <p class="card-text">{{ $matkul->nama_matkul }} adalah salah satu Mata Kuliah di Universitas Singaperbangsa Karawang </p>
                            <p class="card-text"><small class="text-muted">Terakhir diubah tanggal
                                    {{Carbon\Carbon::parse($matkul->updated_at)->format('d-m-Y') ?? '' }}.
                                    {{ $matkul->updated_at->diffForHumans() }}
                                </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5 justify-content-center">
        <div class="col-6">
            <a href="{{ route('matkul.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection
