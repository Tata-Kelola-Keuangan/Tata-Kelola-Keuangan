<x-app-layout>
    <div class="container">
        <h1>Tambah Pegawai</h1>

        <form method="POST" action="{{ route('admin.pegawai.store') }}">
            @csrf

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="NIK">NIK</label>
                <input type="text" class="form-control" id="NIK" name="NIK" required>
            </div>

            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
            </div>

            <div class="form-group">
                <label for="nomor_induk">Nomor Induk</label>
                <input type="text" class="form-control" id="nomor_induk" name="nomor_induk" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-select" id="status" name="status" aria-label="Default select example" required>
                    <option value="" selected disabled>Pilih Status</option>
                    @foreach (\App\Models\Pegawai::getStatusOptions() as $statusValue => $statusLabel)
                        <option value="{{ $statusValue }}">{{ $statusLabel }}</option>
                    @endforeach
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
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="unit_id">Unit</label>
                <select class="form-select" id="unit_id" name="unit_id" aria-label="Default select example" required>
                    <option value="" selected disabled>Pilih Unit</option>
                    @foreach ($units as $unit)
                        <option value="{{ $unit->id }}">{{ $unit->nama }} ({{ $unit->singkatan }})</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="KK">KK</label>
                <input type="text" class="form-control" id="KK" name="KK" required>
            </div>

            <div class="form-group">
                <label for="NPWP">NPWP</label>
                <input type="text" class="form-control" id="NPWP" name="NPWP" required>
            </div>

            <div class="form-group">
                <label for="jenis">Jenis</label>
                <select class="form-select" id="jenis" name="jenis" aria-label="Default select example" required>
                    <option value="" selected disabled>Pilih Jenis</option>
                    @foreach (\App\Models\Pegawai::getJenisOptions() as $jenisValue => $jenisLabel)
                        <option value="{{ $jenisValue }}">{{ $jenisLabel }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="user_id">User</label>
                <select class="form-select" id="user_id" name="user_id" aria-label="Default select example" required>
                    <option value="" selected disabled>Pilih User</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
        </form>
    </div>
</x-app-layout>
