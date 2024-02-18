<x-app-layout>
    <div class="container">
        <h1>Edit Pegawai</h1>

        @can('Pegawai edit')
            <form method="POST" action="{{ route('admin.pegawai.update', $pegawai->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $pegawai->nama }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="NIK">NIK</label>
                    <input type="text" class="form-control" id="NIK" name="NIK" value="{{ $pegawai->NIK }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                        value="{{ $pegawai->tgl_lahir }}" required>
                </div>

                <div class="form-group">
                    <label for="nomor_induk">Nomor Induk</label>
                    <input type="text" class="form-control" id="nomor_induk" name="nomor_induk"
                        value="{{ $pegawai->nomor_induk }}" required>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-select" id="status" name="status" aria-label="Default select example" required>
                        <option value="" selected disabled>Pilih Status</option>
                        @foreach (\App\Models\Pegawai::getStatusOptions() as $statusValue => $statusLabel)
                            <option value="{{ $statusValue }}" {{ $pegawai->status == $statusValue ? 'selected' : '' }}>
                                {{ $statusLabel }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $pegawai->telepon }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pegawai->alamat }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $pegawai->email }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="unit_id">Unit</label>
                    <select class="form-select" id="unit_id" name="unit_id" aria-label="Default select example" required>
                        <option value="" selected disabled>Pilih Unit</option>
                        @foreach ($units as $unit)
                            <option value="{{ $unit->id }}" {{ $pegawai->unit_id == $unit->id ? 'selected' : '' }}>
                                {{ $unit->nama }} ({{ $unit->singkatan }})</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="KK">KK</label>
                    <input type="text" class="form-control" id="KK" name="KK" value="{{ $pegawai->KK }}">
                </div>

                <div class="form-group">
                    <label for="NPWP">NPWP</label>
                    <input type="text" class="form-control" id="NPWP" name="NPWP" value="{{ $pegawai->NPWP }}">
                </div>

                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select class="form-select" id="jenis" name="jenis" aria-label="Default select example" required>
                        <option value="" selected disabled>Pilih Jenis</option>
                        @foreach (\App\Models\Pegawai::getJenisOptions() as $jenisValue => $jenisLabel)
                            <option value="{{ $jenisValue }}" {{ $pegawai->jenis == $jenisValue ? 'selected' : '' }}>
                                {{ $jenisLabel }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </div>
            </form>
        @endcan
    </div>
</x-app-layout>
