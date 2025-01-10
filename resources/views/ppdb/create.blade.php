@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data PPDB') }}</div>
                <div class="card-body">
                <form action="{{ route('ppdb.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <br>
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">Laki-laki
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <input type="text" class="form-control" name="agama">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text-area" class="form-control" name="alamat">
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="number" class="form-control" name="telepon">
                    </div>
                    <div class="form-group">
                        <label>Asal Sekolah</label>
                        <input type="text" class="form-control" name="asal_sekolah">
                    <br>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
