@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data PPDB') }}</div>
                <div class="card-body">
                <form action="{{ route('ppdb.update', $ppdb->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" value="{{ $ppdb->nama_lengkap }}" name="nis" disabled>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <br>
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki" disabled>Laki-laki
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" disabled>Perempuan
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <input type="text" class="form-control" value="{{ $ppdb->agama }}" name="agama">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" value="{{ $ppdb->alamat }}" name="alamat">
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="number" class="form-control" value="{{ $ppdb->telepon }}" name="asal_sekolah">
                    </div>
                    <div class="form-group">
                        <label>Asal Sekolah</label>
                        <input type="text" class="form-control" value="{{ $ppdb->asal_sekolah }}" name="asal_sekolah">
                    </div>
                    <a href="{{ route('ppdb.index') }}" class="btn btn-primary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
