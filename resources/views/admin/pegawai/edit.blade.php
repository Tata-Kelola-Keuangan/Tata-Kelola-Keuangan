<x-app-layout>
    <div class="container-xl px-4 mt-4">
        <form method="POST" action="{{ route('admin.pegawai.update', $pegawai->id) }}" enctype="multipart/form-data"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xl-4">
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                            <img class="img-account-profile rounded-circle mb-2"
                                src="{{ asset('asset/img/profile/' . $pegawai->user->profile) }}" style="max-width: 200px">
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 2 MB</div>

                            <div class="mb-3">
                                <label for="profile" class="form-label">Choose a new profile picture</label>
                                <input type="file" class="form-control" id="profile" name="profile"
                                    value="{{ $pegawai->user->profile }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Upload new image</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card mb-4">
                        <div class="card-header">Pegawai</div>
                        <div class="card-body">
                            @can('Pegawai edit')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="NIK">NIK</label>
                                            <input type="text" class="form-control" id="NIK" name="NIK"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group" id="simple-date1">
                                            <label for="tgl_lahir">Tanggal Lahir</label>
                                            <div class="input-group date">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                                </div>
                                                <input type="text" class="form-control" value="{{ date('d/m/Y') }}"
                                                    id="tgl_lahir" name="tgl_lahir" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nomor_induk">Nomor Induk</label>
                                            <input type="text" class="form-control" id="nomor_induk" name="nomor_induk"
                                                required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Status</label>
                                        <select class="form-control" id="status" name="status"
                                            aria-label="Default select example">
                                            <option value="" selected disabled>Pilih Status</option>
                                            @foreach (\App\Models\Pegawai::getStatusOptions() as $statusValue => $statusLabel)
                                                <option value="{{ $statusValue }}"
                                                    {{ $pegawai->status == $statusValue ? 'selected' : '' }}>
                                                    {{ $statusLabel }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="telepon">No. Telepon</label>
                                        <input class="form-control" id="telepon" name="telepon"
                                            placeholder="Enter your telephone" value="{{ $pegawai->telepon }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="email">Email address</label>
                                        <input class="form-control" id="email" type="email" name="email"
                                            placeholder="Enter your email address" value="{{ $pegawai->user->email }}">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="small mb-1" for="alamat">Alamat</label>
                                    <input class="form-control" id="alamat" name="alamat"
                                        placeholder="Enter your alamat" value="{{ $pegawai->alamat }}">
                                </div>

                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="unit_id">Unit</label>
                                        <select class="form-control" id="unit_id" name="unit_id"
                                            aria-label="Default select example">
                                            <option value="" selected disabled>Pilih Unit</option>
                                            @foreach ($units as $unit)
                                                <option value="{{ $unit->id }}"
                                                    {{ $pegawai->unit_id == $unit->id ? 'selected' : '' }}>
                                                    {{ $unit->nama }} ({{ $unit->singkatan }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="jenis">Jenis</label>
                                        <select class="form-control" id="jenis" name="jenis"
                                            aria-label="Default select example">
                                            <option value="" selected disabled>Pilih Jenis</option>
                                            @foreach (\App\Models\Pegawai::getJenisOptions() as $jenisValue => $jenisLabel)
                                                <option value="{{ $jenisValue }}"
                                                    {{ $pegawai->jenis == $jenisValue ? 'selected' : '' }}>
                                                    {{ $jenisLabel }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="KK">KK</label>
                                        <input class="form-control" id="KK" name="KK"
                                            placeholder="Enter your phone number" value="{{ $pegawai->KK }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="NPWP">NPWP</label>
                                        <input class="form-control" id="NPWP" name="NPWP"
                                            placeholder="Enter your NPWP" value="{{ $pegawai->NPWP }}">
                                    </div>
                                </div>

                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </div>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
