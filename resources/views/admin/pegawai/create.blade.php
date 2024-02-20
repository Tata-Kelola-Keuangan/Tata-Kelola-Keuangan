<x-app-layout>
    <div class="container-fluid" id="container-wrapper">
        <h2>Form Tambah Pegawai</h2>

        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        @can('Pegawai create')
                            <form method="POST" action="{{ route('admin.pegawai.store') }}">
                                @csrf
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
                                                <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                                    value="{{ $pegawai->tgl_lahir }}" required>
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
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status" name="status"
                                                aria-label="Default select example" required>
                                                <option value="" selected disabled>Pilih Status</option>
                                                @foreach (\App\Models\Pegawai::getStatusOptions() as $statusValue => $statusLabel)
                                                    <option value="{{ $statusValue }}">{{ $statusLabel }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telepon">Telepon</label>
                                            <input type="text" class="form-control" id="telepon" name="telepon"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="unit_id">Unit</label>
                                            <select class="form-control" id="unit_id" name="unit_id"
                                                aria-label="Default select example" required>
                                                <option value="" selected disabled>Pilih Unit</option>
                                                @foreach ($units as $unit)
                                                    <option value="{{ $unit->id }}">{{ $unit->nama }}
                                                        ({{ $unit->singkatan }})
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="KK">KK</label>
                                            <input type="text" class="form-control" id="KK" name="KK"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="NPWP">NPWP</label>
                                            <input type="text" class="form-control" id="NPWP" name="NPWP"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jenis">Jenis</label>
                                            <select class="form-control" id="jenis" name="jenis"
                                                aria-label="Default select example" required>
                                                <option value="" selected disabled>Pilih Jenis</option>
                                                @foreach (\App\Models\Pegawai::getJenisOptions() as $jenisValue => $jenisLabel)
                                                    <option value="{{ $jenisValue }}">{{ $jenisLabel }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="user_id">Penjabat</label>
                                            <select class="form-control" id="user_id" name="user_id"
                                                aria-label="Default select example" required>
                                                <option value="" selected disabled>Pilih User</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="text-center mt-5">
                                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @push('js')
        <script src="{{ asset('asset/vendor/select2/dist/js/select2.min.js') }}"></script>
        <!-- Bootstrap Datepicker -->
        <script src="{{ asset('asset/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <!-- Bootstrap Touchspin -->
        <script src="{{ asset('asset/vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js') }}"></script>
        <!-- ClockPicker -->
        <script src="{{ asset('asset/vendor/clock-picker/clockpicker.js') }}"></script>

        <script>
            $('#simple-date1 .input-group.date').datepicker({
                format: 'yyyy-mm-dd',
                todayBtn: 'linked',
                todayHighlight: true,
                autoclose: true,
            });
        </script>
    @endpush
</x-app-layout>
