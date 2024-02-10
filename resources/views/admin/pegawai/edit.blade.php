@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pegawai</h1>

    <form method="POST" action="{{ route('pegawai.update', $pegawai->id) }}">
        @csrf
        @method('PUT')

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
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>

        <!-- Tambahkan form fields untuk atribut lainnya sesuai kebutuhan -->

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </div>
    </form>
</div>
@endsection
