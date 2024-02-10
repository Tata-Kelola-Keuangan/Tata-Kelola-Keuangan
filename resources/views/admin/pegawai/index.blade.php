@extends('layouts.app')

@section('content')
<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User</h1>
        <a type="button" class="btn btn-primary mb-1" href="{{ route('user.create') }}">Tambah User</a>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Tanggal_Lahir</th>
                                <th>Nomor_Induk</th>
                                <th>Status</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>KK</th>
                                <th>NPWP</th>
                                <th>Jenis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pegawai as $pegawai)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $pegawai->name }}</td>
                                <td>{{ $pegawai->nik }}</td>
                                <td>{{ $pegawai->tanggal_lahir }}</td>
                                <td>{{ $pegawai->nomor_induk }}</td>
                                <td>{{ $pegawai->status }}</td>
                                <td>{{ $pegawai->telepon }}</td>
                                <td>{{ $pegawai->alamat }}</td>
                                <td>{{ $pegawai->kk }}</td>
                                <td>{{ $pegawai->npwp }}</td>
                                <td>{{ $pegawai->jenis }}</td>
                                <td>
                                    <div style="display: flex; justify-content: space-between;">
                                        <a href="{{ route('pegawai.edit', ['pegawai' => $pegawai->id]) }}"
                                            class="btn btn-primary mr-2">Edit</a>
                                        <form action="{{ route('pegawai.destroy', ['pegawai' => $pegawai->id]) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr> @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
    @endsection
