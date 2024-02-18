<x-app-layout>
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Pegawai</h1>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-6">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"></div>
                    @can('Pegawai create')
                    <form method="POST" action="{{ route('admin.pegawai.store') }}">
                        @csrf

                        <div class="row mx-auto">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="NIK" name="NIK" placeholder="NIK"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-auto">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nomor_induk" name="nomor_induk"
                                        placeholder="Nomor Induk" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-auto">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control" id="status" name="status"
                                        aria-label="Default select example" required>
                                        <option value="">Status</option>
                                        @foreach (\App\Models\Pegawai::getStatusOptions() as $statusValue =>
                                        $statusLabel)
                                        <option value="{{ $statusValue }}">{{ $statusLabel }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="telepon" name="telepon"
                                        placeholder="Telepon" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mx-auto">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="Alamat" required onfocus="isiAlamat()">
                                </div>

                                <script>
                                    function isiAlamat() {
                                        // Ganti teks ini dengan logika atau sumber data sesuai kebutuhan Anda
                                        var kota = "Kota Contoh";
                                        var kabupaten = "Kabupaten Contoh";
                                        var provinsi = "Provinsi Contoh";

                                        // Mengisi nilai input alamat dengan alamat lengkap
                                        var alamatLengkap = kota + ", " + kabupaten + ", " + provinsi;
                                        document.getElementById("alamat").value = alamatLengkap;
                                    }

                                </script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="unit_id">Unit</label>
                            <select class="form-select" id="unit_id" name="unit_id" aria-label="Default select example"
                                required>
                                <option value="" selected disabled>Pilih Unit</option>
                                @foreach ($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->nama }} ({{ $unit->singkatan }})
                                </option>
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
                            <select class="form-select" id="jenis" name="jenis" aria-label="Default select example"
                                required>
                                <option value="" selected disabled>Pilih Jenis</option>
                                @foreach (\App\Models\Pegawai::getJenisOptions() as $jenisValue => $jenisLabel)
                                <option value="{{ $jenisValue }}">{{ $jenisLabel }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="user_id">User</label>
                            <select class="form-select" id="user_id" name="user_id" aria-label="Default select example"
                                required>
                                <option value="" selected disabled>Pilih User</option>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary mb-4">Tambahkan</button>
                        </div>
                    </form>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
