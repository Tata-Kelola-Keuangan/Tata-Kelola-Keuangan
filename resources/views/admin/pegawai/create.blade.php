@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pegawai</h1>

    <form method="POST" action="{{ route('pegawai.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" placeholder="Optional">
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>

        <div class="form-group">
            <label for="nomor_induk">Nomor Induk</label>
            <input type="text" class="form-control" id="nomor_induk" name="nomor_induk" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-select" id="status" name="status" aria-label="Default select example" required>
                <option value="Pilihan" selected disabled>Pilihan</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <!-- Tambahkan opsi lain jika diperlukan -->
            </select>
        </div>

        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" class="form-control" id="telepon" name="telepon" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>

        <div class="form-group">
            <label for="KK">KK</label>
            <input type="text" class="form-control" id="KK" name="KK" required>
        </div>

        <div class="form-group">
            <label for="npwp">NPWP</label>
            <input type="text" class="form-control" id="npwp" name="npwp" required>
        </div>

        <div class="form-group">
            <label for="jenis">Jenis</label>
            <select class="form-select" id="jenis" name="jenis" aria-label="Default select example" required>
                <option value="Pilihan" selected disabled>Pilihan</option>
                <option value="Admin">Admin</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <!-- Tambahkan opsi lain jika diperlukan -->
            </select>
        </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </div>
    </form>
</div>
@endsection
